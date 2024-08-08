
namespace MOVEitClientProvisioningTool
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
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
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {           
            this.label1 = new System.Windows.Forms.Label();
            this.dgClientList = new System.Windows.Forms.DataGridView();
            this.btAddClient = new System.Windows.Forms.Button();
            this.btViewDetails = new System.Windows.Forms.Button();
            this.btPayload = new System.Windows.Forms.Button();
            this.btClose = new System.Windows.Forms.Button();
            this.btProvision = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.dgClientList)).BeginInit();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(13, 13);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(59, 15);
            this.label1.TabIndex = 1;
            this.label1.Text = "Client List";
            // 
            // dgClientList
            // 
            this.dgClientList.AutoSizeColumnsMode = System.Windows.Forms.DataGridViewAutoSizeColumnsMode.Fill;
            this.dgClientList.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgClientList.EditMode = System.Windows.Forms.DataGridViewEditMode.EditProgrammatically;
            this.dgClientList.Location = new System.Drawing.Point(13, 41);
            this.dgClientList.Name = "dgClientList";
            this.dgClientList.RowTemplate.Height = 25;
            this.dgClientList.SelectionMode = System.Windows.Forms.DataGridViewSelectionMode.FullRowSelect;
            this.dgClientList.Size = new System.Drawing.Size(527, 106);
            this.dgClientList.TabIndex = 2;
            // 
            // btAddClient
            // 
            this.btAddClient.Location = new System.Drawing.Point(13, 164);
            this.btAddClient.Name = "btAddClient";
            this.btAddClient.Size = new System.Drawing.Size(108, 23);
            this.btAddClient.TabIndex = 3;
            this.btAddClient.Text = "Add Client...";
            this.btAddClient.UseVisualStyleBackColor = true;
            this.btAddClient.Click += new System.EventHandler(this.btAddClient_Click);
            // 
            // btViewDetails
            // 
            this.btViewDetails.Location = new System.Drawing.Point(340, 164);
            this.btViewDetails.Name = "btViewDetails";
            this.btViewDetails.Size = new System.Drawing.Size(129, 23);
            this.btViewDetails.TabIndex = 4;
            this.btViewDetails.Text = "View status details";
            this.btViewDetails.UseVisualStyleBackColor = true;
            this.btViewDetails.Click += new System.EventHandler(this.btProcessList_Click);
            // 
            // btPayload
            // 
            this.btPayload.Location = new System.Drawing.Point(127, 164);
            this.btPayload.Name = "btPayload";
            this.btPayload.Size = new System.Drawing.Size(101, 23);
            this.btPayload.TabIndex = 5;
            this.btPayload.Text = "View payload";
            this.btPayload.UseVisualStyleBackColor = true;
            this.btPayload.Click += new System.EventHandler(this.btPayload_Click);
            // 
            // btClose
            // 
            this.btClose.Location = new System.Drawing.Point(475, 164);
            this.btClose.Name = "btClose";
            this.btClose.Size = new System.Drawing.Size(65, 23);
            this.btClose.TabIndex = 6;
            this.btClose.Text = "Close";
            this.btClose.UseVisualStyleBackColor = true;
            this.btClose.Click += new System.EventHandler(this.btClose_Click);
            // 
            // btProvision
            // 
            this.btProvision.Location = new System.Drawing.Point(234, 164);
            this.btProvision.Name = "btProvision";
            this.btProvision.Size = new System.Drawing.Size(100, 23);
            this.btProvision.TabIndex = 7;
            this.btProvision.Text = "Provision client";
            this.btProvision.UseVisualStyleBackColor = true;
            this.btProvision.Click += new System.EventHandler(this.btProvision_Click);
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(7F, 15F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(552, 211);
            this.Controls.Add(this.btProvision);
            this.Controls.Add(this.btClose);
            this.Controls.Add(this.btPayload);
            this.Controls.Add(this.btViewDetails);
            this.Controls.Add(this.btAddClient);
            this.Controls.Add(this.dgClientList);
            this.Controls.Add(this.label1);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.MaximizeBox = false;
            this.Name = "Form1";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "MOVEit Client Provisioning Tool";
            this.FormClosed += new System.Windows.Forms.FormClosedEventHandler(this.Form1_FormClosed);
            this.Load += new System.EventHandler(this.Form1_Load);
            ((System.ComponentModel.ISupportInitialize)(this.dgClientList)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        public System.Windows.Forms.DataGridView dgClientList;
        private System.Windows.Forms.Button btAddClient;
        private System.Windows.Forms.Button btViewDetails;
        private System.Windows.Forms.Button btPayload;
        private System.Windows.Forms.Button btClose;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.Button btProvision;
    }
}

