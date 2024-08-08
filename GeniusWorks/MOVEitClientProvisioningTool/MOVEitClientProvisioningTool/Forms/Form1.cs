using MOVEitClientProvisioningTool.Entities;
using MOVEitClientProvisioningTool.Forms;
using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace MOVEitClientProvisioningTool
{
    public partial class Form1 : Form
    {
        private readonly BindingList<DGClientInfo> _data;

        public Form1()
        {
            InitializeComponent();

            _data = new BindingList<DGClientInfo>();

            dgClientList.DataSource = _data;
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void btAddClient_Click(object sender, EventArgs e)
        {
            NewClientWindow ncw = new NewClientWindow(this);
            ncw.Show();
        }

        private void Form1_FormClosed(object sender, FormClosedEventArgs e)
        {
            Application.Exit();
        }

        private void btProcessList_Click(object sender, EventArgs e)
        {
            ProvisionStatus ps = new ProvisionStatus();
            ps.ShowDialog();
        }

        private void btPayload_Click(object sender, EventArgs e)
        {
            DataGridViewRow dgr = this.dgClientList.SelectedRows[0];

            string list = dgClientList.Rows[dgr.Index].Cells[1].Value.ToString();
            List<UserInfo> users = JsonConvert.DeserializeObject<List<UserInfo>>(list);

            ClientInfo ci = new ClientInfo
            {
                clientID = dgr.Cells[0].Value.ToString(),
                userList = users
            };

            string payload = JsonConvert.SerializeObject(ci, Formatting.Indented);

            ViewClientPayload vcpFrm = new ViewClientPayload();
            vcpFrm.txPayload.Text = payload;
            vcpFrm.Show();
        }

        private void btClose_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btProvision_Click(object sender, EventArgs e)
        {
            MessageBox.Show("Client provisioning process has been completed.", "Process complete", MessageBoxButtons.OK, MessageBoxIcon.Information);
        }
    }
}
