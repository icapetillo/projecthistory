using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Text;
using System.Windows.Forms;

namespace MOVEitClientProvisioningTool
{
    public partial class Login : Form
    {
        public Login()
        {
            InitializeComponent();
        }

        private void btLogin_Click(object sender, EventArgs e)
        {
            if (String.Equals(txUserName.Text, "test") && String.Equals(txPassword.Text, "test"))
            {
                Hide();
                Form1 mainFrm = new Form1();
                mainFrm.Show();
            }
            else
            {
                MessageBox.Show("You don't have access to this tool. Please contact Production Support Team.", "ERROR", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
        }
    }
}
