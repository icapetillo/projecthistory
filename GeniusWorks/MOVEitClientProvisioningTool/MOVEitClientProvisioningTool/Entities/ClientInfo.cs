using System;
using System.Collections.Generic;
using System.Text;

namespace MOVEitClientProvisioningTool.Entities
{
    public class ClientInfo
    {
        public string clientID { get; set; }
        public List<UserInfo> userList { get; set; }
    }
}
