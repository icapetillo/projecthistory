
namespace MOVEitClientProvisioningTool
{
    partial class NewClientWindow
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
            this.label1 = new System.Windows.Forms.Label();
            this.txClientID = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.dgUserList = new System.Windows.Forms.DataGridView();
            this.btAddUser = new System.Windows.Forms.Button();
            this.btRemoveUser = new System.Windows.Forms.Button();
            this.btCreateClientEntry = new System.Windows.Forms.Button();
            this.btCancel = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.dgUserList)).BeginInit();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(13, 13);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(55, 15);
            this.label1.TabIndex = 0;
            this.label1.Text = "Client ID:";
            // 
            // txClientID
            // 
            this.txClientID.Location = new System.Drawing.Point(74, 10);
            this.txClientID.Name = "txClientID";
            this.txClientID.Size = new System.Drawing.Size(247, 23);
            this.txClientID.TabIndex = 1;
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Location = new System.Drawing.Point(14, 36);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(54, 15);
            this.label2.TabIndex = 2;
            this.label2.Text = "User List:";
            // 
            // dgUserList
            // 
            this.dgUserList.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill;
            this.dgUserList.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgUserList.Location = new System.Drawing.Point(12, 54);
            this.dgUserList.Name = "dgUserList";
            this.dgUserList.RowTemplate.Height = 25;
            this.dgUserList.Size = new System.Drawing.Size(308, 150);
            this.dgUserList.TabIndex = 3;
            // 
            // btAddUser
            // 
            this.btAddUser.Location = new System.Drawing.Point(326, 54);
            this.btAddUser.Name = "btAddUser";
            this.btAddUser.Size = new System.Drawing.Size(132, 23);
            this.btAddUser.TabIndex = 4;
            this.btAddUser.Text = "Add user...";
            this.btAddUser.UseVisualStyleBackColor = true;
            this.btAddUser.Click += new System.EventHandler(this.btAddUser_Click);
            // 
            // btRemoveUser
            // 
            this.btRemoveUser.Location = new System.Drawing.Point(326, 83);
            this.btRemoveUser.Name = "btRemoveUser";
            this.btRemoveUser.Size = new System.Drawing.Size(132, 23);
            this.btRemoveUser.TabIndex = 5;
            this.btRemoveUser.Text = "Remove user";
            this.btRemoveUser.UseVisualStyleBackColor = true;
            // 
            // btCreateClientEntry
            // 
            this.btCreateClientEntry.Location = new System.Drawing.Point(326, 155);
            this.btCreateClientEntry.Name = "btCreateClientEntry";
            this.btCreateClientEntry.Size = new System.Drawing.Size(132, 23);
            this.btCreateClientEntry.TabIndex = 6;
            this.btCreateClientEntry.Text = "Create client entry";
            this.btCreateClientEntry.UseVisualStyleBackColor = true;
            this.btCreateClientEntry.Click += new System.EventHandler(this.btCreateClientEntry_Click);
            // 
            // btCancel
            // 
            this.btCancel.Location = new System.Drawing.Point(326, 181);
            this.btCancel.Name = "btCancel";
            this.btCancel.Size = new System.Drawing.Size(132, 23);
            this.btCancel.TabIndex = 7;
            this.btCancel.Text = "Cancel";
            this.btCancel.UseVisualStyleBackColor = true;
            this.btCancel.Click += new System.EventHandler(this.btCancel_Click);
            // 
            // NewClientWindow
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(7F, 15F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(471, 219);
            this.Controls.Add(this.btCancel);
            this.Controls.Add(this.btCreateClientEntry);
            this.Controls.Add(this.btRemoveUser);
            this.Controls.Add(this.btAddUser);
            this.Controls.Add(this.dgUserList);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.txClientID);
            this.Controls.Add(this.label1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.MaximizeBox = false;
            this.Name = "NewClientWindow";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "NewClientWindow";
            ((System.ComponentModel.ISupportInitialize)(this.dgUserList)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txClientID;
        private System.Windows.Forms.Label label2;
        public System.Windows.Forms.DataGridView dgUserList;
        private System.Windows.Forms.Button btAddUser;
        private System.Windows.Forms.Button btRemoveUser;
        private System.Windows.Forms.Button btCreateClientEntry;
        private System.Windows.Forms.Button btCancel;
    }
}