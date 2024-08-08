using Newtonsoft.Json.Linq;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using Newtonsoft.Json;
using System.Text.RegularExpressions;
using Microsoft.Azure.KeyVault;
using System.IO;
using System.Net.Mail;

namespace JSON_validator
{
    public partial class frmMain : Form
    {

        private static bool showPass = false;

        public frmMain()
        {
            InitializeComponent();
            tabControl1.TabPages.Remove(tabKeyVaultSecret);
        }

        private void btnGenerateString_Click(object sender, EventArgs e)
        {
            if (txtSourceJson.Text.Length > 0)
            {
                if (isValidJSON(txtSourceJson.Text))
                {
                    string sourceJSON = txtSourceJson.Text;
                    JObject obj = JObject.Parse(sourceJSON);
                    txtJSONString.Text = obj.ToString(Formatting.None);
                    txJSONStringKV.Text = obj.ToString(Formatting.None);
                }
                else
                {
                    MessageBox.Show("JSON is not valid.", "Generate string", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
                
            }
            else
            {
                MessageBox.Show("Please enter a JSON schema to convert.", "Generate string", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void btnCopy_Click(object sender, EventArgs e)
        {
            if (txtJSONString.Text.Length > 0)
            {
                Clipboard.SetText(txtJSONString.Text);
                MessageBox.Show("JSON string copied to clipboard.", "Copy clipboard", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }   
            else
            {
                MessageBox.Show("JSON string is empty.", "Copy to clipboard", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private bool isValidJSON(string json)
        {
            try
            {
                JToken token = JObject.Parse(json);
                return true;
            }
            catch (Exception)
            {
                return false;
            }
        }

        private void btnValidateJSON_Click(object sender, EventArgs e)
        {
            if (isValidJSON(txtSourceJson.Text))
            {
                MessageBox.Show("JSON schema is valid.", "Validate JSON", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            else
            {
                MessageBox.Show("JSON schema has errors.", "Validate JSON", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void btnAdd_Click(object sender, EventArgs e)
        {            
            ConfigParams configs = new ConfigParams();            
            
            if (!string.IsNullOrEmpty(cbFileConcurrency.Text))
            {
                configs.fileConcurrency = Convert.ToInt32(cbFileConcurrency.Text);
            }
            else
            {
                MessageBox.Show("Please enter a value for the File Concurrency field.", "Generate config string", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return;
            }
            
            if (txtNotifyUsers.TextLength > 0)
            {
                configs.notifyUsers = new List<string>(txtNotifyUsers.Text.Split(new string[] { "\r\n" }, StringSplitOptions.RemoveEmptyEntries));
            }
            else
            {
                MessageBox.Show("Please enter at least one email address to send notifications.", "Generate config string", MessageBoxButtons.OK, MessageBoxIcon.Error);
                return;
            }

            configs.sFTPTransport = new sFTPTransportValues() { enabled = chbEnableSFTP.Checked };

            if (chbEnableBLOB.Checked && string.IsNullOrEmpty(txtContainerName.Text))
            {
                MessageBox.Show("Please enter a valid BLOB container name to continue.", "Generate config string", MessageBoxButtons.OK, MessageBoxIcon.Error);
                txtContainerName.Focus();
                return;
            }
            else
            {
                configs.blobTransport = new blobTransportValues() { enabled = chbEnableBLOB.Checked, container = txtContainerName.Text };
            }            

            txtSourceJson.Text = JsonConvert.SerializeObject(configs, Formatting.Indented); ;
            txtJSONString.Text = JsonConvert.SerializeObject(configs, Formatting.None);
        }

        private void chbEnableBLOB_CheckedChanged(object sender, EventArgs e)
        {
            if (chbEnableBLOB.Checked)
            {
                txtContainerName.Enabled = true;
            }
            else
            {
                txtContainerName.Enabled = false;
            }
        }

        private void btnAddUser_Click(object sender, EventArgs e)
        {            
            Regex emailRegex = new Regex(@"^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[A-Z0-9.-]+\.[A-Z]{2,}$");
            try
            {
                if (!string.IsNullOrEmpty(txtUserEmail.Text))
                {
                    MailAddress userEmail = new MailAddress(txtUserEmail.Text);
                    txtNotifyUsers.Text += txtUserEmail.Text + System.Environment.NewLine;
                    txtUserEmail.Text = string.Empty;
                }                
            }
            catch (FormatException)
            {
                MessageBox.Show("Please enter a valid email address.", "Add User Email", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }

        }

        private void frmMain_Load(object sender, EventArgs e)
        {
            cbFileConcurrency.SelectedIndex = 0;
            cbEnvironment.DropDownStyle = ComboBoxStyle.DropDownList;
            cbEnvironment.SelectedIndex = 0;
            toolTip1.SetToolTip(btDeserializeKVString, "Enter a JSON string to unpack its contents into the form");
            toolTip1.SetToolTip(btnDeserialize, "Enter a JSON string to unpack its contents into the form");
            btViewPass.Image = Image.FromFile(Application.StartupPath + "/show.png");
        }

        private void btnClear_Click(object sender, EventArgs e)
        {
            clear_sFTP();
            txtJSONString.Text = string.Empty;
        }

        private void clear_sFTP()
        {
            cbFileConcurrency.SelectedIndex = 0;
            chbEnableSFTP.Checked = false;
            chbEnableBLOB.Checked = false;
            txtContainerName.Text = string.Empty;
            txtContainerName.Enabled = false;
            txtUserEmail.Text = string.Empty;
            txtNotifyUsers.Text = string.Empty;
            txtSourceJson.Text = string.Empty;            
        }

        private void txtUserEmail_KeyDown(object sender, KeyEventArgs e)
        {
            if (e.KeyCode == Keys.Enter)
            {
                btnAddUser_Click(this, new EventArgs());
            }
        }

        private void btCreateSecret_Click(object sender, EventArgs e)
        {
            KeyVaultParam kvpars = new KeyVaultParam();
            kvpars.createdDate = DateTime.Now;
            kvpars.updatedDate = DateTime.Now;
            kvpars.secretIdentifier = txSecretIdentifier.Text;
            kvpars.setActivationDate = cbSetActivationDate.Checked;
            kvpars.setExpirationDate = cbSetExpirationDate.Checked;
            kvpars.contentType = txContentType.Text;
            kvpars.secretValue = txSecretValue.Text;
            kvpars.tags = new List<Tag>();
            foreach (DataGridViewRow dr in tagList.Rows)
            {        
                if (!dr.IsNewRow)
                {
                    Tag tag = new Tag();
                    tag.tagName = dr.Cells[0].Value.ToString();
                    tag.tagValue = dr.Cells[1].Value.ToString();
                    kvpars.tags.Add(tag);
                }                
            }

            txtSourceJson.Text = JsonConvert.SerializeObject(kvpars, Formatting.Indented);
            txtJSONString.Text = JsonConvert.SerializeObject(kvpars, Formatting.None);            
        }

        private void btShowSecretValue_Click(object sender, EventArgs e)
        {            
            if (btShowSecretValue.Text == "Hide")
            {
                txSecretValue.UseSystemPasswordChar = true;
                btShowSecretValue.Text = "Show";
            }
            else
            {
                txSecretValue.UseSystemPasswordChar = false;
                btShowSecretValue.Text = "Hide";
            }
                
        }

        private void btnShowManualEntry_Click(object sender, EventArgs e)
        {
            if (btnShowManualEntry.Text == "Show manual entry")
            {
                this.Size = new Size(555, 665);
                btnShowManualEntry.Text = "Hide manual entry";
            }
            else
            {
                this.Size = new Size(555, 405);
                btnShowManualEntry.Text = "Show manual entry";
            }
            
        }

        private void chbSFTP_CheckedChanged(object sender, EventArgs e)
        {
            if (chbSFTP.Checked)
                gbsFTPInfo.Visible = true;
            else
                gbsFTPInfo.Visible = false;
        }

        private void btLoadCert_Click(object sender, EventArgs e)
        {
            OpenFileDialog loadCert = new OpenFileDialog();
            loadCert.Title = "Load certificate file";
            if (loadCert.ShowDialog() == DialogResult.OK)
            {
                using (StreamReader sr = File.OpenText(loadCert.FileName))
                {
                    txSFTPCertPreview.Text = sr.ReadToEnd();
                }                
            }
        }

        private void btGenerateJSONString_Click(object sender, EventArgs e)
        {            
            KeyVaultString kvs = new KeyVaultString();
            kvs.gtp = new gtpValues();
            kvs.wstrust = new wstrustValues();
            kvs.sFTP = new sftpValues();
            if (!string.IsNullOrEmpty(txClientID.Text))
                kvs.id = Convert.ToInt32(txClientID.Text);
            else
                kvs.id = 0;
            switch (cbEnvironment.SelectedIndex)
            {
                case 0:                
                    kvs.gtp.user = txUserName.Text;
                    kvs.gtp.pass = txPassword.Text;
                    kvs.wstrust = null;
                    break;
                case 1:
                    kvs.wstrust.user = txUserName.Text;
                    kvs.wstrust.pass = txPassword.Text;
                    kvs.gtp = null;
                    break;
                default:
                    break;
            }
            if (chbSFTP.Checked)
            {
                kvs.sFTP.user = txSFTPUser.Text;
                kvs.sFTP.server = txSFTPServer.Text;
                kvs.sFTP.cert = txSFTPCertPreview.Text;
                if (cbClientRootPath.Checked)
                {
                    kvs.sFTP.clientRootPath = txClientRootPath.Text;
                }
                else
                {
                    kvs.sFTP.clientRootPath = null;
                }
            }
            else
            {
                kvs.sFTP = null;
            }
            
            txtSourceJson.Text = JsonConvert.SerializeObject(kvs, Formatting.Indented, new JsonSerializerSettings
            {
                NullValueHandling = NullValueHandling.Ignore
            });
            txJSONStringKV.Text = JsonConvert.SerializeObject(kvs, Formatting.None, new JsonSerializerSettings
            {
                NullValueHandling = NullValueHandling.Ignore
            });

        }

        private void btnDeserialize_Click(object sender, EventArgs e)
        {
            if (!String.IsNullOrEmpty(txtJSONString.Text))
            {
                try
                {
                    StringBuilder sb = new StringBuilder();
                    clear_sFTP();
                    ConfigParams cp = new ConfigParams();
                    cp = JsonConvert.DeserializeObject<ConfigParams>(txtJSONString.Text);

                    cbFileConcurrency.Text = cp.fileConcurrency.ToString();
                    chbEnableSFTP.Checked = cp.sFTPTransport.enabled;
                    chbEnableBLOB.Checked = cp.blobTransport.enabled;
                    txtContainerName.Text = cp.blobTransport.container;
                    txtContainerName.Enabled = cp.blobTransport.enabled;
                    foreach (string email in cp.notifyUsers)
                    {
                        sb.Append(email);
                        sb.Append(Environment.NewLine);
                    }
                    txtNotifyUsers.Text = sb.ToString();
                    txtSourceJson.Text = JsonConvert.SerializeObject(cp, Formatting.Indented);
                }
                catch (Exception)
                {
                    MessageBox.Show("Please add a valid JSON string in the textbox to unpack its contents into the form.", "Invalid JSON string", MessageBoxButtons.OK, MessageBoxIcon.Error);                    
                }
                
            }
            else
            {
                MessageBox.Show("Please add a JSON string in the textbox to unpack its contents into the form.", "Deserialize string", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }

        }

        private void btDeserializeKVString_Click(object sender, EventArgs e)
        {
            if (!String.IsNullOrEmpty(txJSONStringKV.Text)) {
                clearKV();
                try
                {
                    KeyVaultString kv = new KeyVaultString();
                    kv = JsonConvert.DeserializeObject<KeyVaultString>(txJSONStringKV.Text);
                    txClientID.Text = kv.id.ToString();
                    cbEnvironment.SelectedIndex = 0;
                    if (kv.sFTP != null)
                    {
                        chbSFTP.Checked = true;
                        txSFTPServer.Text = kv.sFTP.server;
                        txSFTPUser.Text = kv.sFTP.user;
                        txSFTPCertPreview.Text = kv.sFTP.cert;
                        if (kv.sFTP.clientRootPath != null)
                        {
                            cbClientRootPath.Checked = true;
                            txClientRootPath.Text = kv.sFTP.clientRootPath;
                        }
                    }                
                    if (kv.gtp != null)
                    {
                        txUserName.Text = kv.gtp.user;
                        txPassword.Text = kv.gtp.pass;
                        cbEnvironment.SelectedIndex = 0;
                    }
                    if (kv.wstrust != null)
                    {
                        txUserName.Text = kv.wstrust.user;
                        txPassword.Text = kv.wstrust.pass;
                        cbEnvironment.SelectedIndex = 1;
                    }
                    
                    txtSourceJson.Text = JsonConvert.SerializeObject(kv, Formatting.Indented, new JsonSerializerSettings
                    {
                        NullValueHandling = NullValueHandling.Ignore
                    });                    
                }
                catch (Exception)
                {
                    MessageBox.Show("Please add a valid JSON string in the textbox to unpack its contents into the form.", "Invalid JSON string", MessageBoxButtons.OK, MessageBoxIcon.Error);
                }
            }
            else
            {
                MessageBox.Show("Please add a JSON string in the textbox to unpack its contents into the form.", "Deserialize string", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void clearKV()
        {
            txClientID.Text = string.Empty;
            cbEnvironment.SelectedIndex = 0;
            chbSFTP.Checked = false;
            txUserName.Text = string.Empty;
            txPassword.Text = string.Empty;
            txSFTPServer.Text = string.Empty;
            txSFTPUser.Text = string.Empty;
            txSFTPCertPreview.Text = string.Empty;
            txtSourceJson.Text = string.Empty;
        }

        private void btClearKVTab_Click(object sender, EventArgs e)
        {
            clearKV();
            txJSONStringKV.Text = string.Empty;
        }

        private void btCopyKVString_Click(object sender, EventArgs e)
        {
            if (txJSONStringKV.Text.Length > 0)
            {
                Clipboard.SetText(txJSONStringKV.Text);
                MessageBox.Show("JSON string copied to clipboard.", "Copy clipboard", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            else
            {
                MessageBox.Show("JSON string is empty.", "Copy to clipboard", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }

        private void cbClientRootPath_CheckedChanged(object sender, EventArgs e)
        {
            if (cbClientRootPath.Checked)
                txClientRootPath.Visible = true;
            else
                txClientRootPath.Visible = false;
        }

        private void txtJSONString_TextChanged(object sender, EventArgs e)
        {
            if (!string.IsNullOrEmpty(txtJSONString.Text))
                btnDeserialize.Enabled = true;
            else
                btnDeserialize.Enabled = false;
        }

        private void txJSONStringKV_TextChanged(object sender, EventArgs e)
        {
            if (!string.IsNullOrEmpty(txJSONStringKV.Text))
                btDeserializeKVString.Enabled = true;
            else
                btDeserializeKVString.Enabled = false;
        }

        private void linkLabel1_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            MessageBox.Show("Aurora Configuration Assistant - Version 1.2", "About", MessageBoxButtons.OK, MessageBoxIcon.Information);
        }

        private void cbFileConcurrency_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (!char.IsControl(e.KeyChar) && !char.IsDigit(e.KeyChar))
            {
                e.Handled = true;
            }
        }

        private void btViewPass_Click(object sender, EventArgs e)
        {
            if (!showPass)
            {
                txPassword.PasswordChar = '\0';
                btViewPass.Image = Image.FromFile(Application.StartupPath + "/hide.png");
                showPass = true;
            }
            else
            {
                txPassword.PasswordChar = '*';
                btViewPass.Image = Image.FromFile(Application.StartupPath + "/show.png");
                showPass = false;
            }
            
        }

        private void tabControl1_SelectedIndexChanged(object sender, EventArgs e)
        {
            txtSourceJson.Text = string.Empty;
        }

        private void txPassword_TextChanged(object sender, EventArgs e)
        {
            if (!string.IsNullOrEmpty(txPassword.Text))
            {
                btViewPass.Enabled = true;
            }
            else
            {
                btViewPass.Enabled = false;
            }
        }

        private void txClientID_KeyPress(object sender, KeyPressEventArgs e)
        {
            if (Char.IsDigit(e.KeyChar))
            {
                e.Handled = false;
            }
            else if (Char.IsControl(e.KeyChar)) //permitir teclas de control como retroceso
            {
                e.Handled = false;
            }
            else
            {
                //el resto de teclas pulsadas se desactivan
                e.Handled = true;
            }
        }
    }
}
