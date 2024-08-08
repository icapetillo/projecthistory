using MOVEitClientProvisioningTool.Entities;
using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace MOVEitClientProvisioningTool
{
    public partial class NewUserForm : Form
    {
        private NewClientWindow _ncw;
        public NewUserForm(NewClientWindow ncw)
        {
            _ncw = ncw;
            InitializeComponent();
        }

        private void btAddUser_Click(object sender, EventArgs e)
        {
            UserInfo newUser = new UserInfo
            {
                fullName = txFullName.Text,
                email = txEmail.Text
            };            
            BindingList<UserInfo> ds = (BindingList<UserInfo>)_ncw.dgUserList.DataSource;
            ds.Add(newUser);
        }

        private void btCancel_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}
