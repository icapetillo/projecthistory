using MOVEitClientProvisioningTool.Entities;
using Newtonsoft.Json;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace MOVEitClientProvisioningTool
{
    public partial class NewClientWindow : Form
    {
        private Form1 _mainFrm;

        private readonly BindingList<UserInfo> _data;

        public NewClientWindow(Form1 mainFrm)
        {
            _mainFrm = mainFrm;
            InitializeComponent();

            _data = new BindingList<UserInfo>();

            dgUserList.DataSource = _data;
        }

        private void btAddUser_Click(object sender, EventArgs e)
        {
            NewUserForm nuf = new NewUserForm(this);
            nuf.ShowDialog();
        }

        private void btCancel_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        private void btCreateClientEntry_Click(object sender, EventArgs e)
        {
            //Convert user list to JSON
            string users = JsonConvert.SerializeObject(_data);

            //Create new client object and add to datasource
            DGClientInfo newClient = new DGClientInfo
            {
                clientID = txClientID.Text,
                userListJson = users
            };

            BindingList<DGClientInfo> ds = (BindingList<DGClientInfo>)_mainFrm.dgClientList.DataSource;
            ds.Add(newClient);

            this.Close();
        }
    }
}
