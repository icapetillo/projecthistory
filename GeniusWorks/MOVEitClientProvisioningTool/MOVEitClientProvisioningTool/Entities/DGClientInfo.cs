using System;
using System.Collections.Generic;
using System.Text;

namespace MOVEitClientProvisioningTool.Entities
{
    public class DGClientInfo
    {
        public string clientID { get; set; }
        public string userListJson { get; set; }
        public string provisionStatus { get; set; }
    }
}
