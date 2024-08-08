namespace JSON_validator
{
    partial class frmMain
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmMain));
            this.label1 = new System.Windows.Forms.Label();
            this.txtSourceJson = new System.Windows.Forms.TextBox();
            this.txtJSONString = new System.Windows.Forms.TextBox();
            this.btnCopy = new System.Windows.Forms.Button();
            this.btnValidateJSON = new System.Windows.Forms.Button();
            this.btnGenerateString = new System.Windows.Forms.Button();
            this.btnCreateJSON = new System.Windows.Forms.Button();
            this.tabControl1 = new System.Windows.Forms.TabControl();
            this.tabGenerator = new System.Windows.Forms.TabPage();
            this.btnDeserialize = new System.Windows.Forms.Button();
            this.gbNotifyUsers = new System.Windows.Forms.GroupBox();
            this.btnAddUser = new System.Windows.Forms.Button();
            this.txtNotifyUsers = new System.Windows.Forms.TextBox();
            this.txtUserEmail = new System.Windows.Forms.TextBox();
            this.label6 = new System.Windows.Forms.Label();
            this.txtContainerName = new System.Windows.Forms.TextBox();
            this.btnClear = new System.Windows.Forms.Button();
            this.label4 = new System.Windows.Forms.Label();
            this.chbEnableBLOB = new System.Windows.Forms.CheckBox();
            this.chbEnableSFTP = new System.Windows.Forms.CheckBox();
            this.cbFileConcurrency = new System.Windows.Forms.ComboBox();
            this.label3 = new System.Windows.Forms.Label();
            this.tabKeyVaultSecret = new System.Windows.Forms.TabPage();
            this.btCreateSecret = new System.Windows.Forms.Button();
            this.Tags = new System.Windows.Forms.Label();
            this.tagList = new System.Windows.Forms.DataGridView();
            this.tagName = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.tagValue = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.btSearchSecret = new System.Windows.Forms.Button();
            this.groupBox2 = new System.Windows.Forms.GroupBox();
            this.btCopySecretValue = new System.Windows.Forms.Button();
            this.btShowSecretValue = new System.Windows.Forms.Button();
            this.txSecretValue = new System.Windows.Forms.TextBox();
            this.label8 = new System.Windows.Forms.Label();
            this.txContentType = new System.Windows.Forms.TextBox();
            this.label7 = new System.Windows.Forms.Label();
            this.groupBox1 = new System.Windows.Forms.GroupBox();
            this.cbEnabled = new System.Windows.Forms.CheckBox();
            this.cbSetExpirationDate = new System.Windows.Forms.CheckBox();
            this.cbSetActivationDate = new System.Windows.Forms.CheckBox();
            this.txSecretIdentifier = new System.Windows.Forms.TextBox();
            this.label5 = new System.Windows.Forms.Label();
            this.tabKeyVault = new System.Windows.Forms.TabPage();
            this.btViewPass = new System.Windows.Forms.Button();
            this.txClientID = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.btDeserializeKVString = new System.Windows.Forms.Button();
            this.btClearKVTab = new System.Windows.Forms.Button();
            this.btCopyKVString = new System.Windows.Forms.Button();
            this.txJSONStringKV = new System.Windows.Forms.TextBox();
            this.btGenerateJSONString = new System.Windows.Forms.Button();
            this.gbsFTPInfo = new System.Windows.Forms.GroupBox();
            this.txClientRootPath = new System.Windows.Forms.TextBox();
            this.cbClientRootPath = new System.Windows.Forms.CheckBox();
            this.label15 = new System.Windows.Forms.Label();
            this.txSFTPCertPreview = new System.Windows.Forms.TextBox();
            this.btLoadCert = new System.Windows.Forms.Button();
            this.label16 = new System.Windows.Forms.Label();
            this.txSFTPUser = new System.Windows.Forms.TextBox();
            this.label14 = new System.Windows.Forms.Label();
            this.txSFTPServer = new System.Windows.Forms.TextBox();
            this.label13 = new System.Windows.Forms.Label();
            this.txPassword = new System.Windows.Forms.TextBox();
            this.label12 = new System.Windows.Forms.Label();
            this.txUserName = new System.Windows.Forms.TextBox();
            this.label11 = new System.Windows.Forms.Label();
            this.chbSFTP = new System.Windows.Forms.CheckBox();
            this.cbEnvironment = new System.Windows.Forms.ComboBox();
            this.label9 = new System.Windows.Forms.Label();
            this.btnShowManualEntry = new System.Windows.Forms.Button();
            this.toolTip1 = new System.Windows.Forms.ToolTip(this.components);
            this.linkLabel1 = new System.Windows.Forms.LinkLabel();
            this.tabControl1.SuspendLayout();
            this.tabGenerator.SuspendLayout();
            this.gbNotifyUsers.SuspendLayout();
            this.tabKeyVaultSecret.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)(this.tagList)).BeginInit();
            this.groupBox2.SuspendLayout();
            this.groupBox1.SuspendLayout();
            this.tabKeyVault.SuspendLayout();
            this.gbsFTPInfo.SuspendLayout();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(9, 364);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(66, 13);
            this.label1.TabIndex = 0;
            this.label1.Text = "Enter JSON:";
            // 
            // txtSourceJson
            // 
            this.txtSourceJson.Location = new System.Drawing.Point(12, 390);
            this.txtSourceJson.Multiline = true;
            this.txtSourceJson.Name = "txtSourceJson";
            this.txtSourceJson.ScrollBars = System.Windows.Forms.ScrollBars.Vertical;
            this.txtSourceJson.Size = new System.Drawing.Size(511, 189);
            this.txtSourceJson.TabIndex = 1;
            // 
            // txtJSONString
            // 
            this.txtJSONString.Location = new System.Drawing.Point(192, 237);
            this.txtJSONString.Name = "txtJSONString";
            this.txtJSONString.Size = new System.Drawing.Size(297, 20);
            this.txtJSONString.TabIndex = 3;
            this.txtJSONString.TextChanged += new System.EventHandler(this.txtJSONString_TextChanged);
            // 
            // btnCopy
            // 
            this.btnCopy.Location = new System.Drawing.Point(279, 263);
            this.btnCopy.Name = "btnCopy";
            this.btnCopy.Size = new System.Drawing.Size(123, 23);
            this.btnCopy.TabIndex = 4;
            this.btnCopy.Text = "Copy to clipboard";
            this.btnCopy.UseVisualStyleBackColor = true;
            this.btnCopy.Click += new System.EventHandler(this.btnCopy_Click);
            // 
            // btnValidateJSON
            // 
            this.btnValidateJSON.Location = new System.Drawing.Point(228, 585);
            this.btnValidateJSON.Name = "btnValidateJSON";
            this.btnValidateJSON.Size = new System.Drawing.Size(122, 23);
            this.btnValidateJSON.TabIndex = 5;
            this.btnValidateJSON.Text = "Validate JSON";
            this.btnValidateJSON.UseVisualStyleBackColor = true;
            this.btnValidateJSON.Click += new System.EventHandler(this.btnValidateJSON_Click);
            // 
            // btnGenerateString
            // 
            this.btnGenerateString.Location = new System.Drawing.Point(356, 585);
            this.btnGenerateString.Name = "btnGenerateString";
            this.btnGenerateString.Size = new System.Drawing.Size(167, 23);
            this.btnGenerateString.TabIndex = 6;
            this.btnGenerateString.Text = "Create configuration string";
            this.btnGenerateString.UseVisualStyleBackColor = true;
            this.btnGenerateString.Click += new System.EventHandler(this.btnGenerateString_Click);
            // 
            // btnCreateJSON
            // 
            this.btnCreateJSON.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnCreateJSON.ForeColor = System.Drawing.Color.Green;
            this.btnCreateJSON.Location = new System.Drawing.Point(14, 235);
            this.btnCreateJSON.Name = "btnCreateJSON";
            this.btnCreateJSON.Size = new System.Drawing.Size(172, 23);
            this.btnCreateJSON.TabIndex = 11;
            this.btnCreateJSON.Text = "Create configuration string";
            this.btnCreateJSON.UseVisualStyleBackColor = true;
            this.btnCreateJSON.Click += new System.EventHandler(this.btnAdd_Click);
            // 
            // tabControl1
            // 
            this.tabControl1.Controls.Add(this.tabGenerator);
            this.tabControl1.Controls.Add(this.tabKeyVaultSecret);
            this.tabControl1.Controls.Add(this.tabKeyVault);
            this.tabControl1.Location = new System.Drawing.Point(12, 12);
            this.tabControl1.Name = "tabControl1";
            this.tabControl1.SelectedIndex = 0;
            this.tabControl1.Size = new System.Drawing.Size(515, 318);
            this.tabControl1.TabIndex = 12;
            this.tabControl1.SelectedIndexChanged += new System.EventHandler(this.tabControl1_SelectedIndexChanged);
            // 
            // tabGenerator
            // 
            this.tabGenerator.Controls.Add(this.btnDeserialize);
            this.tabGenerator.Controls.Add(this.gbNotifyUsers);
            this.tabGenerator.Controls.Add(this.txtContainerName);
            this.tabGenerator.Controls.Add(this.btnClear);
            this.tabGenerator.Controls.Add(this.label4);
            this.tabGenerator.Controls.Add(this.chbEnableBLOB);
            this.tabGenerator.Controls.Add(this.chbEnableSFTP);
            this.tabGenerator.Controls.Add(this.cbFileConcurrency);
            this.tabGenerator.Controls.Add(this.btnCopy);
            this.tabGenerator.Controls.Add(this.label3);
            this.tabGenerator.Controls.Add(this.btnCreateJSON);
            this.tabGenerator.Controls.Add(this.txtJSONString);
            this.tabGenerator.Location = new System.Drawing.Point(4, 22);
            this.tabGenerator.Name = "tabGenerator";
            this.tabGenerator.Padding = new System.Windows.Forms.Padding(3);
            this.tabGenerator.Size = new System.Drawing.Size(507, 292);
            this.tabGenerator.TabIndex = 0;
            this.tabGenerator.Text = "Storage Table";
            this.tabGenerator.UseVisualStyleBackColor = true;
            // 
            // btnDeserialize
            // 
            this.btnDeserialize.Enabled = false;
            this.btnDeserialize.Location = new System.Drawing.Point(170, 263);
            this.btnDeserialize.Name = "btnDeserialize";
            this.btnDeserialize.Size = new System.Drawing.Size(103, 23);
            this.btnDeserialize.TabIndex = 15;
            this.btnDeserialize.Text = "Unpack string";
            this.btnDeserialize.UseVisualStyleBackColor = true;
            this.btnDeserialize.Click += new System.EventHandler(this.btnDeserialize_Click);
            // 
            // gbNotifyUsers
            // 
            this.gbNotifyUsers.Controls.Add(this.btnAddUser);
            this.gbNotifyUsers.Controls.Add(this.txtNotifyUsers);
            this.gbNotifyUsers.Controls.Add(this.txtUserEmail);
            this.gbNotifyUsers.Controls.Add(this.label6);
            this.gbNotifyUsers.Location = new System.Drawing.Point(14, 83);
            this.gbNotifyUsers.Name = "gbNotifyUsers";
            this.gbNotifyUsers.Size = new System.Drawing.Size(475, 146);
            this.gbNotifyUsers.TabIndex = 20;
            this.gbNotifyUsers.TabStop = false;
            this.gbNotifyUsers.Text = "Notify Users";
            // 
            // btnAddUser
            // 
            this.btnAddUser.Location = new System.Drawing.Point(394, 15);
            this.btnAddUser.Name = "btnAddUser";
            this.btnAddUser.Size = new System.Drawing.Size(75, 23);
            this.btnAddUser.TabIndex = 2;
            this.btnAddUser.Text = "Add";
            this.btnAddUser.UseVisualStyleBackColor = true;
            this.btnAddUser.Click += new System.EventHandler(this.btnAddUser_Click);
            // 
            // txtNotifyUsers
            // 
            this.txtNotifyUsers.Location = new System.Drawing.Point(6, 44);
            this.txtNotifyUsers.Multiline = true;
            this.txtNotifyUsers.Name = "txtNotifyUsers";
            this.txtNotifyUsers.ReadOnly = true;
            this.txtNotifyUsers.ScrollBars = System.Windows.Forms.ScrollBars.Vertical;
            this.txtNotifyUsers.Size = new System.Drawing.Size(463, 92);
            this.txtNotifyUsers.TabIndex = 19;
            // 
            // txtUserEmail
            // 
            this.txtUserEmail.Location = new System.Drawing.Point(51, 17);
            this.txtUserEmail.Name = "txtUserEmail";
            this.txtUserEmail.Size = new System.Drawing.Size(337, 20);
            this.txtUserEmail.TabIndex = 1;
            this.txtUserEmail.KeyDown += new System.Windows.Forms.KeyEventHandler(this.txtUserEmail_KeyDown);
            // 
            // label6
            // 
            this.label6.AutoSize = true;
            this.label6.Location = new System.Drawing.Point(7, 20);
            this.label6.Name = "label6";
            this.label6.Size = new System.Drawing.Size(38, 13);
            this.label6.TabIndex = 0;
            this.label6.Text = "Email: ";
            // 
            // txtContainerName
            // 
            this.txtContainerName.Enabled = false;
            this.txtContainerName.Location = new System.Drawing.Point(104, 44);
            this.txtContainerName.Name = "txtContainerName";
            this.txtContainerName.Size = new System.Drawing.Size(385, 20);
            this.txtContainerName.TabIndex = 17;
            // 
            // btnClear
            // 
            this.btnClear.ForeColor = System.Drawing.Color.Red;
            this.btnClear.Location = new System.Drawing.Point(408, 263);
            this.btnClear.Name = "btnClear";
            this.btnClear.Size = new System.Drawing.Size(81, 23);
            this.btnClear.TabIndex = 13;
            this.btnClear.Text = "Clear all";
            this.btnClear.UseVisualStyleBackColor = true;
            this.btnClear.Click += new System.EventHandler(this.btnClear_Click);
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Location = new System.Drawing.Point(11, 47);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(87, 13);
            this.label4.TabIndex = 16;
            this.label4.Text = "Container name: ";
            // 
            // chbEnableBLOB
            // 
            this.chbEnableBLOB.AutoSize = true;
            this.chbEnableBLOB.Location = new System.Drawing.Point(351, 19);
            this.chbEnableBLOB.Name = "chbEnableBLOB";
            this.chbEnableBLOB.Size = new System.Drawing.Size(138, 17);
            this.chbEnableBLOB.TabIndex = 15;
            this.chbEnableBLOB.Text = "Enable BLOB Transport";
            this.chbEnableBLOB.UseVisualStyleBackColor = true;
            this.chbEnableBLOB.CheckedChanged += new System.EventHandler(this.chbEnableBLOB_CheckedChanged);
            // 
            // chbEnableSFTP
            // 
            this.chbEnableSFTP.AutoSize = true;
            this.chbEnableSFTP.Location = new System.Drawing.Point(201, 19);
            this.chbEnableSFTP.Name = "chbEnableSFTP";
            this.chbEnableSFTP.Size = new System.Drawing.Size(135, 17);
            this.chbEnableSFTP.TabIndex = 14;
            this.chbEnableSFTP.Text = "Enable sFTP Transport";
            this.chbEnableSFTP.UseVisualStyleBackColor = true;
            // 
            // cbFileConcurrency
            // 
            this.cbFileConcurrency.FormattingEnabled = true;
            this.cbFileConcurrency.Items.AddRange(new object[] {
            "1",
            "2",
            "3",
            "4",
            "5",
            "6",
            "7",
            "8",
            "9",
            "10"});
            this.cbFileConcurrency.Location = new System.Drawing.Point(105, 17);
            this.cbFileConcurrency.Name = "cbFileConcurrency";
            this.cbFileConcurrency.Size = new System.Drawing.Size(76, 21);
            this.cbFileConcurrency.TabIndex = 13;
            this.cbFileConcurrency.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.cbFileConcurrency_KeyPress);
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Location = new System.Drawing.Point(11, 20);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(88, 13);
            this.label3.TabIndex = 12;
            this.label3.Text = "File concurrency:";
            // 
            // tabKeyVaultSecret
            // 
            this.tabKeyVaultSecret.Controls.Add(this.btCreateSecret);
            this.tabKeyVaultSecret.Controls.Add(this.Tags);
            this.tabKeyVaultSecret.Controls.Add(this.tagList);
            this.tabKeyVaultSecret.Controls.Add(this.btSearchSecret);
            this.tabKeyVaultSecret.Controls.Add(this.groupBox2);
            this.tabKeyVaultSecret.Controls.Add(this.groupBox1);
            this.tabKeyVaultSecret.Controls.Add(this.txSecretIdentifier);
            this.tabKeyVaultSecret.Controls.Add(this.label5);
            this.tabKeyVaultSecret.Location = new System.Drawing.Point(4, 22);
            this.tabKeyVaultSecret.Name = "tabKeyVaultSecret";
            this.tabKeyVaultSecret.Size = new System.Drawing.Size(507, 292);
            this.tabKeyVaultSecret.TabIndex = 2;
            this.tabKeyVaultSecret.Text = "Key Vault Secret";
            this.tabKeyVaultSecret.UseVisualStyleBackColor = true;
            // 
            // btCreateSecret
            // 
            this.btCreateSecret.Location = new System.Drawing.Point(369, 228);
            this.btCreateSecret.Name = "btCreateSecret";
            this.btCreateSecret.Size = new System.Drawing.Size(111, 23);
            this.btCreateSecret.TabIndex = 7;
            this.btCreateSecret.Text = "Create Secret";
            this.btCreateSecret.UseVisualStyleBackColor = true;
            this.btCreateSecret.Click += new System.EventHandler(this.btCreateSecret_Click);
            // 
            // Tags
            // 
            this.Tags.AutoSize = true;
            this.Tags.Location = new System.Drawing.Point(199, 43);
            this.Tags.Name = "Tags";
            this.Tags.Size = new System.Drawing.Size(31, 13);
            this.Tags.TabIndex = 6;
            this.Tags.Text = "Tags";
            // 
            // tagList
            // 
            this.tagList.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.tagList.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.tagName,
            this.tagValue});
            this.tagList.Location = new System.Drawing.Point(199, 63);
            this.tagList.Name = "tagList";
            this.tagList.Size = new System.Drawing.Size(282, 75);
            this.tagList.TabIndex = 5;
            // 
            // tagName
            // 
            this.tagName.HeaderText = "Tag Name";
            this.tagName.Name = "tagName";
            // 
            // tagValue
            // 
            this.tagValue.HeaderText = "Tag Value";
            this.tagValue.Name = "tagValue";
            // 
            // btSearchSecret
            // 
            this.btSearchSecret.Location = new System.Drawing.Point(420, 11);
            this.btSearchSecret.Name = "btSearchSecret";
            this.btSearchSecret.Size = new System.Drawing.Size(61, 23);
            this.btSearchSecret.TabIndex = 4;
            this.btSearchSecret.Text = "Find";
            this.btSearchSecret.UseVisualStyleBackColor = true;
            // 
            // groupBox2
            // 
            this.groupBox2.Controls.Add(this.btCopySecretValue);
            this.groupBox2.Controls.Add(this.btShowSecretValue);
            this.groupBox2.Controls.Add(this.txSecretValue);
            this.groupBox2.Controls.Add(this.label8);
            this.groupBox2.Controls.Add(this.txContentType);
            this.groupBox2.Controls.Add(this.label7);
            this.groupBox2.Location = new System.Drawing.Point(22, 144);
            this.groupBox2.Name = "groupBox2";
            this.groupBox2.Size = new System.Drawing.Size(459, 77);
            this.groupBox2.TabIndex = 3;
            this.groupBox2.TabStop = false;
            this.groupBox2.Text = "Secret";
            // 
            // btCopySecretValue
            // 
            this.btCopySecretValue.Location = new System.Drawing.Point(398, 41);
            this.btCopySecretValue.Name = "btCopySecretValue";
            this.btCopySecretValue.Size = new System.Drawing.Size(55, 23);
            this.btCopySecretValue.TabIndex = 5;
            this.btCopySecretValue.Text = "Copy";
            this.btCopySecretValue.UseVisualStyleBackColor = true;
            // 
            // btShowSecretValue
            // 
            this.btShowSecretValue.Location = new System.Drawing.Point(337, 41);
            this.btShowSecretValue.Name = "btShowSecretValue";
            this.btShowSecretValue.Size = new System.Drawing.Size(55, 23);
            this.btShowSecretValue.TabIndex = 4;
            this.btShowSecretValue.Text = "Show";
            this.btShowSecretValue.UseVisualStyleBackColor = true;
            this.btShowSecretValue.Click += new System.EventHandler(this.btShowSecretValue_Click);
            // 
            // txSecretValue
            // 
            this.txSecretValue.Location = new System.Drawing.Point(83, 43);
            this.txSecretValue.Name = "txSecretValue";
            this.txSecretValue.Size = new System.Drawing.Size(248, 20);
            this.txSecretValue.TabIndex = 3;
            this.txSecretValue.UseSystemPasswordChar = true;
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.Location = new System.Drawing.Point(7, 46);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(70, 13);
            this.label8.TabIndex = 2;
            this.label8.Text = "Secret value:";
            // 
            // txContentType
            // 
            this.txContentType.Location = new System.Drawing.Point(129, 17);
            this.txContentType.Name = "txContentType";
            this.txContentType.Size = new System.Drawing.Size(324, 20);
            this.txContentType.TabIndex = 1;
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Location = new System.Drawing.Point(7, 20);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(116, 13);
            this.label7.TabIndex = 0;
            this.label7.Text = "Content type (optional):";
            // 
            // groupBox1
            // 
            this.groupBox1.Controls.Add(this.cbEnabled);
            this.groupBox1.Controls.Add(this.cbSetExpirationDate);
            this.groupBox1.Controls.Add(this.cbSetActivationDate);
            this.groupBox1.Location = new System.Drawing.Point(20, 43);
            this.groupBox1.Name = "groupBox1";
            this.groupBox1.Size = new System.Drawing.Size(173, 95);
            this.groupBox1.TabIndex = 2;
            this.groupBox1.TabStop = false;
            this.groupBox1.Text = "Settings";
            // 
            // cbEnabled
            // 
            this.cbEnabled.AutoSize = true;
            this.cbEnabled.Location = new System.Drawing.Point(7, 66);
            this.cbEnabled.Name = "cbEnabled";
            this.cbEnabled.Size = new System.Drawing.Size(71, 17);
            this.cbEnabled.TabIndex = 2;
            this.cbEnabled.Text = "Enabled?";
            this.cbEnabled.UseVisualStyleBackColor = true;
            // 
            // cbSetExpirationDate
            // 
            this.cbSetExpirationDate.AutoSize = true;
            this.cbSetExpirationDate.Location = new System.Drawing.Point(7, 43);
            this.cbSetExpirationDate.Name = "cbSetExpirationDate";
            this.cbSetExpirationDate.Size = new System.Drawing.Size(120, 17);
            this.cbSetExpirationDate.TabIndex = 1;
            this.cbSetExpirationDate.Text = "Set expiration date?";
            this.cbSetExpirationDate.UseVisualStyleBackColor = true;
            // 
            // cbSetActivationDate
            // 
            this.cbSetActivationDate.AutoSize = true;
            this.cbSetActivationDate.Location = new System.Drawing.Point(7, 20);
            this.cbSetActivationDate.Name = "cbSetActivationDate";
            this.cbSetActivationDate.Size = new System.Drawing.Size(121, 17);
            this.cbSetActivationDate.TabIndex = 0;
            this.cbSetActivationDate.Text = "Set activation date?";
            this.cbSetActivationDate.UseVisualStyleBackColor = true;
            // 
            // txSecretIdentifier
            // 
            this.txSecretIdentifier.Location = new System.Drawing.Point(111, 13);
            this.txSecretIdentifier.Name = "txSecretIdentifier";
            this.txSecretIdentifier.Size = new System.Drawing.Size(303, 20);
            this.txSecretIdentifier.TabIndex = 1;
            // 
            // label5
            // 
            this.label5.AutoSize = true;
            this.label5.Location = new System.Drawing.Point(19, 16);
            this.label5.Name = "label5";
            this.label5.Size = new System.Drawing.Size(86, 13);
            this.label5.TabIndex = 0;
            this.label5.Text = "Secret identifier: ";
            // 
            // tabKeyVault
            // 
            this.tabKeyVault.Controls.Add(this.btViewPass);
            this.tabKeyVault.Controls.Add(this.txClientID);
            this.tabKeyVault.Controls.Add(this.label2);
            this.tabKeyVault.Controls.Add(this.btDeserializeKVString);
            this.tabKeyVault.Controls.Add(this.btClearKVTab);
            this.tabKeyVault.Controls.Add(this.btCopyKVString);
            this.tabKeyVault.Controls.Add(this.txJSONStringKV);
            this.tabKeyVault.Controls.Add(this.btGenerateJSONString);
            this.tabKeyVault.Controls.Add(this.gbsFTPInfo);
            this.tabKeyVault.Controls.Add(this.txPassword);
            this.tabKeyVault.Controls.Add(this.label12);
            this.tabKeyVault.Controls.Add(this.txUserName);
            this.tabKeyVault.Controls.Add(this.label11);
            this.tabKeyVault.Controls.Add(this.chbSFTP);
            this.tabKeyVault.Controls.Add(this.cbEnvironment);
            this.tabKeyVault.Controls.Add(this.label9);
            this.tabKeyVault.Location = new System.Drawing.Point(4, 22);
            this.tabKeyVault.Name = "tabKeyVault";
            this.tabKeyVault.Size = new System.Drawing.Size(507, 292);
            this.tabKeyVault.TabIndex = 3;
            this.tabKeyVault.Text = "Key Vault Connection";
            this.tabKeyVault.UseVisualStyleBackColor = true;
            // 
            // btViewPass
            // 
            this.btViewPass.Enabled = false;
            this.btViewPass.Location = new System.Drawing.Point(456, 44);
            this.btViewPass.Name = "btViewPass";
            this.btViewPass.Size = new System.Drawing.Size(34, 20);
            this.btViewPass.TabIndex = 16;
            this.btViewPass.UseVisualStyleBackColor = true;
            this.btViewPass.Click += new System.EventHandler(this.btViewPass_Click);
            // 
            // txClientID
            // 
            this.txClientID.Location = new System.Drawing.Point(317, 18);
            this.txClientID.Name = "txClientID";
            this.txClientID.Size = new System.Drawing.Size(100, 20);
            this.txClientID.TabIndex = 20;
            this.txClientID.KeyPress += new System.Windows.Forms.KeyPressEventHandler(this.txClientID_KeyPress);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(256, 21);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(50, 13);
            this.label2.TabIndex = 19;
            this.label2.Text = "Client ID:";
            // 
            // btDeserializeKVString
            // 
            this.btDeserializeKVString.Enabled = false;
            this.btDeserializeKVString.Location = new System.Drawing.Point(152, 261);
            this.btDeserializeKVString.Name = "btDeserializeKVString";
            this.btDeserializeKVString.Size = new System.Drawing.Size(117, 23);
            this.btDeserializeKVString.TabIndex = 18;
            this.btDeserializeKVString.Text = "Unpack string";
            this.btDeserializeKVString.UseVisualStyleBackColor = true;
            this.btDeserializeKVString.Click += new System.EventHandler(this.btDeserializeKVString_Click);
            // 
            // btClearKVTab
            // 
            this.btClearKVTab.ForeColor = System.Drawing.Color.Red;
            this.btClearKVTab.Location = new System.Drawing.Point(404, 261);
            this.btClearKVTab.Name = "btClearKVTab";
            this.btClearKVTab.Size = new System.Drawing.Size(86, 23);
            this.btClearKVTab.TabIndex = 17;
            this.btClearKVTab.Text = "Clear all";
            this.btClearKVTab.UseVisualStyleBackColor = true;
            this.btClearKVTab.Click += new System.EventHandler(this.btClearKVTab_Click);
            // 
            // btCopyKVString
            // 
            this.btCopyKVString.Location = new System.Drawing.Point(275, 261);
            this.btCopyKVString.Name = "btCopyKVString";
            this.btCopyKVString.Size = new System.Drawing.Size(123, 23);
            this.btCopyKVString.TabIndex = 16;
            this.btCopyKVString.Text = "Copy to clipboard";
            this.btCopyKVString.UseVisualStyleBackColor = true;
            this.btCopyKVString.Click += new System.EventHandler(this.btCopyKVString_Click);
            // 
            // txJSONStringKV
            // 
            this.txJSONStringKV.Location = new System.Drawing.Point(201, 235);
            this.txJSONStringKV.Name = "txJSONStringKV";
            this.txJSONStringKV.Size = new System.Drawing.Size(289, 20);
            this.txJSONStringKV.TabIndex = 14;
            this.txJSONStringKV.TextChanged += new System.EventHandler(this.txJSONStringKV_TextChanged);
            // 
            // btGenerateJSONString
            // 
            this.btGenerateJSONString.Font = new System.Drawing.Font("Microsoft Sans Serif", 8.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btGenerateJSONString.ForeColor = System.Drawing.Color.Green;
            this.btGenerateJSONString.Location = new System.Drawing.Point(19, 234);
            this.btGenerateJSONString.Name = "btGenerateJSONString";
            this.btGenerateJSONString.Size = new System.Drawing.Size(176, 23);
            this.btGenerateJSONString.TabIndex = 10;
            this.btGenerateJSONString.Text = "Create Key Vault string";
            this.btGenerateJSONString.UseVisualStyleBackColor = true;
            this.btGenerateJSONString.Click += new System.EventHandler(this.btGenerateJSONString_Click);
            // 
            // gbsFTPInfo
            // 
            this.gbsFTPInfo.Controls.Add(this.txClientRootPath);
            this.gbsFTPInfo.Controls.Add(this.cbClientRootPath);
            this.gbsFTPInfo.Controls.Add(this.label15);
            this.gbsFTPInfo.Controls.Add(this.txSFTPCertPreview);
            this.gbsFTPInfo.Controls.Add(this.btLoadCert);
            this.gbsFTPInfo.Controls.Add(this.label16);
            this.gbsFTPInfo.Controls.Add(this.txSFTPUser);
            this.gbsFTPInfo.Controls.Add(this.label14);
            this.gbsFTPInfo.Controls.Add(this.txSFTPServer);
            this.gbsFTPInfo.Controls.Add(this.label13);
            this.gbsFTPInfo.Location = new System.Drawing.Point(19, 70);
            this.gbsFTPInfo.Name = "gbsFTPInfo";
            this.gbsFTPInfo.Size = new System.Drawing.Size(472, 158);
            this.gbsFTPInfo.TabIndex = 9;
            this.gbsFTPInfo.TabStop = false;
            this.gbsFTPInfo.Text = "sFTP Information";
            this.gbsFTPInfo.Visible = false;
            // 
            // txClientRootPath
            // 
            this.txClientRootPath.Location = new System.Drawing.Point(141, 124);
            this.txClientRootPath.Name = "txClientRootPath";
            this.txClientRootPath.Size = new System.Drawing.Size(308, 20);
            this.txClientRootPath.TabIndex = 16;
            this.txClientRootPath.Visible = false;
            // 
            // cbClientRootPath
            // 
            this.cbClientRootPath.AutoSize = true;
            this.cbClientRootPath.Location = new System.Drawing.Point(20, 126);
            this.cbClientRootPath.Name = "cbClientRootPath";
            this.cbClientRootPath.Size = new System.Drawing.Size(115, 17);
            this.cbClientRootPath.TabIndex = 15;
            this.cbClientRootPath.Text = "Set client root path";
            this.cbClientRootPath.UseVisualStyleBackColor = true;
            this.cbClientRootPath.CheckedChanged += new System.EventHandler(this.cbClientRootPath_CheckedChanged);
            // 
            // label15
            // 
            this.label15.AutoSize = true;
            this.label15.Location = new System.Drawing.Point(237, 60);
            this.label15.Name = "label15";
            this.label15.Size = new System.Drawing.Size(57, 13);
            this.label15.TabIndex = 14;
            this.label15.Text = "Certificate:";
            // 
            // txSFTPCertPreview
            // 
            this.txSFTPCertPreview.Location = new System.Drawing.Point(64, 91);
            this.txSFTPCertPreview.Name = "txSFTPCertPreview";
            this.txSFTPCertPreview.Size = new System.Drawing.Size(385, 20);
            this.txSFTPCertPreview.TabIndex = 13;
            // 
            // btLoadCert
            // 
            this.btLoadCert.Location = new System.Drawing.Point(300, 57);
            this.btLoadCert.Name = "btLoadCert";
            this.btLoadCert.Size = new System.Drawing.Size(149, 23);
            this.btLoadCert.TabIndex = 12;
            this.btLoadCert.Text = "Load certificate...";
            this.btLoadCert.UseVisualStyleBackColor = true;
            this.btLoadCert.Click += new System.EventHandler(this.btLoadCert_Click);
            // 
            // label16
            // 
            this.label16.AutoSize = true;
            this.label16.Location = new System.Drawing.Point(17, 94);
            this.label16.Name = "label16";
            this.label16.Size = new System.Drawing.Size(48, 13);
            this.label16.TabIndex = 11;
            this.label16.Text = "Preview:";
            // 
            // txSFTPUser
            // 
            this.txSFTPUser.Location = new System.Drawing.Point(64, 57);
            this.txSFTPUser.Name = "txSFTPUser";
            this.txSFTPUser.Size = new System.Drawing.Size(152, 20);
            this.txSFTPUser.TabIndex = 3;
            // 
            // label14
            // 
            this.label14.AutoSize = true;
            this.label14.Location = new System.Drawing.Point(17, 60);
            this.label14.Name = "label14";
            this.label14.Size = new System.Drawing.Size(32, 13);
            this.label14.TabIndex = 2;
            this.label14.Text = "User:";
            // 
            // txSFTPServer
            // 
            this.txSFTPServer.Location = new System.Drawing.Point(64, 25);
            this.txSFTPServer.Name = "txSFTPServer";
            this.txSFTPServer.Size = new System.Drawing.Size(385, 20);
            this.txSFTPServer.TabIndex = 1;
            // 
            // label13
            // 
            this.label13.AutoSize = true;
            this.label13.Location = new System.Drawing.Point(17, 28);
            this.label13.Name = "label13";
            this.label13.Size = new System.Drawing.Size(41, 13);
            this.label13.TabIndex = 0;
            this.label13.Text = "Server:";
            // 
            // txPassword
            // 
            this.txPassword.Location = new System.Drawing.Point(317, 44);
            this.txPassword.Name = "txPassword";
            this.txPassword.PasswordChar = '*';
            this.txPassword.Size = new System.Drawing.Size(135, 20);
            this.txPassword.TabIndex = 8;
            this.txPassword.TextChanged += new System.EventHandler(this.txPassword_TextChanged);
            // 
            // label12
            // 
            this.label12.AutoSize = true;
            this.label12.Location = new System.Drawing.Point(255, 47);
            this.label12.Name = "label12";
            this.label12.Size = new System.Drawing.Size(56, 13);
            this.label12.TabIndex = 7;
            this.label12.Text = "Password:";
            // 
            // txUserName
            // 
            this.txUserName.Location = new System.Drawing.Point(107, 44);
            this.txUserName.Name = "txUserName";
            this.txUserName.Size = new System.Drawing.Size(128, 20);
            this.txUserName.TabIndex = 6;
            // 
            // label11
            // 
            this.label11.AutoSize = true;
            this.label11.Location = new System.Drawing.Point(15, 47);
            this.label11.Name = "label11";
            this.label11.Size = new System.Drawing.Size(61, 13);
            this.label11.TabIndex = 5;
            this.label11.Text = "User name:";
            // 
            // chbSFTP
            // 
            this.chbSFTP.AutoSize = true;
            this.chbSFTP.Location = new System.Drawing.Point(439, 20);
            this.chbSFTP.Name = "chbSFTP";
            this.chbSFTP.Size = new System.Drawing.Size(51, 17);
            this.chbSFTP.TabIndex = 4;
            this.chbSFTP.Text = "sFTP";
            this.chbSFTP.UseVisualStyleBackColor = true;
            this.chbSFTP.CheckedChanged += new System.EventHandler(this.chbSFTP_CheckedChanged);
            // 
            // cbEnvironment
            // 
            this.cbEnvironment.FormattingEnabled = true;
            this.cbEnvironment.Items.AddRange(new object[] {
            "gtp",
            "wstrust"});
            this.cbEnvironment.Location = new System.Drawing.Point(107, 18);
            this.cbEnvironment.Name = "cbEnvironment";
            this.cbEnvironment.Size = new System.Drawing.Size(128, 21);
            this.cbEnvironment.TabIndex = 1;
            // 
            // label9
            // 
            this.label9.AutoSize = true;
            this.label9.Location = new System.Drawing.Point(16, 21);
            this.label9.Name = "label9";
            this.label9.Size = new System.Drawing.Size(78, 13);
            this.label9.TabIndex = 0;
            this.label9.Text = "Authentication:";
            // 
            // btnShowManualEntry
            // 
            this.btnShowManualEntry.Location = new System.Drawing.Point(12, 332);
            this.btnShowManualEntry.Name = "btnShowManualEntry";
            this.btnShowManualEntry.Size = new System.Drawing.Size(123, 23);
            this.btnShowManualEntry.TabIndex = 14;
            this.btnShowManualEntry.Text = "Show manual entry";
            this.btnShowManualEntry.UseVisualStyleBackColor = true;
            this.btnShowManualEntry.Click += new System.EventHandler(this.btnShowManualEntry_Click);
            // 
            // toolTip1
            // 
            this.toolTip1.ToolTipTitle = "Unpack JSON string";
            // 
            // linkLabel1
            // 
            this.linkLabel1.AutoSize = true;
            this.linkLabel1.Location = new System.Drawing.Point(467, 337);
            this.linkLabel1.Name = "linkLabel1";
            this.linkLabel1.Size = new System.Drawing.Size(44, 13);
            this.linkLabel1.TabIndex = 15;
            this.linkLabel1.TabStop = true;
            this.linkLabel1.Text = "About...";
            this.linkLabel1.LinkClicked += new System.Windows.Forms.LinkLabelLinkClickedEventHandler(this.linkLabel1_LinkClicked);
            // 
            // frmMain
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(539, 361);
            this.Controls.Add(this.linkLabel1);
            this.Controls.Add(this.btnShowManualEntry);
            this.Controls.Add(this.txtSourceJson);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.btnValidateJSON);
            this.Controls.Add(this.tabControl1);
            this.Controls.Add(this.btnGenerateString);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.MaximizeBox = false;
            this.Name = "frmMain";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Aurora Configuration Assistant";
            this.Load += new System.EventHandler(this.frmMain_Load);
            this.tabControl1.ResumeLayout(false);
            this.tabGenerator.ResumeLayout(false);
            this.tabGenerator.PerformLayout();
            this.gbNotifyUsers.ResumeLayout(false);
            this.gbNotifyUsers.PerformLayout();
            this.tabKeyVaultSecret.ResumeLayout(false);
            this.tabKeyVaultSecret.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)(this.tagList)).EndInit();
            this.groupBox2.ResumeLayout(false);
            this.groupBox2.PerformLayout();
            this.groupBox1.ResumeLayout(false);
            this.groupBox1.PerformLayout();
            this.tabKeyVault.ResumeLayout(false);
            this.tabKeyVault.PerformLayout();
            this.gbsFTPInfo.ResumeLayout(false);
            this.gbsFTPInfo.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txtSourceJson;
        private System.Windows.Forms.TextBox txtJSONString;
        private System.Windows.Forms.Button btnCopy;
        private System.Windows.Forms.Button btnValidateJSON;
        private System.Windows.Forms.Button btnGenerateString;
        private System.Windows.Forms.Button btnCreateJSON;
        private System.Windows.Forms.TabControl tabControl1;
        private System.Windows.Forms.TabPage tabGenerator;
        private System.Windows.Forms.ComboBox cbFileConcurrency;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.CheckBox chbEnableBLOB;
        private System.Windows.Forms.CheckBox chbEnableSFTP;
        private System.Windows.Forms.TextBox txtNotifyUsers;
        private System.Windows.Forms.TextBox txtContainerName;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.GroupBox gbNotifyUsers;
        private System.Windows.Forms.Button btnAddUser;
        private System.Windows.Forms.TextBox txtUserEmail;
        private System.Windows.Forms.Label label6;
        private System.Windows.Forms.Button btnClear;
        private System.Windows.Forms.TabPage tabKeyVaultSecret;
        private System.Windows.Forms.TextBox txSecretIdentifier;
        private System.Windows.Forms.Label label5;
        private System.Windows.Forms.Button btSearchSecret;
        private System.Windows.Forms.GroupBox groupBox2;
        private System.Windows.Forms.Button btCopySecretValue;
        private System.Windows.Forms.Button btShowSecretValue;
        private System.Windows.Forms.TextBox txSecretValue;
        private System.Windows.Forms.Label label8;
        private System.Windows.Forms.TextBox txContentType;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.GroupBox groupBox1;
        private System.Windows.Forms.CheckBox cbEnabled;
        private System.Windows.Forms.CheckBox cbSetExpirationDate;
        private System.Windows.Forms.CheckBox cbSetActivationDate;
        private System.Windows.Forms.Label Tags;
        private System.Windows.Forms.DataGridView tagList;
        private System.Windows.Forms.DataGridViewTextBoxColumn tagName;
        private System.Windows.Forms.DataGridViewTextBoxColumn tagValue;
        private System.Windows.Forms.Button btCreateSecret;
        private System.Windows.Forms.TabPage tabKeyVault;
        private System.Windows.Forms.Button btnShowManualEntry;
        private System.Windows.Forms.ComboBox cbEnvironment;
        private System.Windows.Forms.Label label9;
        private System.Windows.Forms.GroupBox gbsFTPInfo;
        private System.Windows.Forms.Button btLoadCert;
        private System.Windows.Forms.Label label16;
        private System.Windows.Forms.TextBox txSFTPUser;
        private System.Windows.Forms.Label label14;
        private System.Windows.Forms.TextBox txSFTPServer;
        private System.Windows.Forms.Label label13;
        private System.Windows.Forms.TextBox txPassword;
        private System.Windows.Forms.Label label12;
        private System.Windows.Forms.TextBox txUserName;
        private System.Windows.Forms.Label label11;
        private System.Windows.Forms.CheckBox chbSFTP;
        private System.Windows.Forms.Button btGenerateJSONString;
        private System.Windows.Forms.TextBox txSFTPCertPreview;
        private System.Windows.Forms.Label label15;
        private System.Windows.Forms.Button btnDeserialize;
        private System.Windows.Forms.TextBox txJSONStringKV;
        private System.Windows.Forms.Button btDeserializeKVString;
        private System.Windows.Forms.Button btClearKVTab;
        private System.Windows.Forms.Button btCopyKVString;
        private System.Windows.Forms.TextBox txClientRootPath;
        private System.Windows.Forms.CheckBox cbClientRootPath;
        private System.Windows.Forms.TextBox txClientID;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.ToolTip toolTip1;
        private System.Windows.Forms.LinkLabel linkLabel1;
        private System.Windows.Forms.Button btViewPass;
    }
}

