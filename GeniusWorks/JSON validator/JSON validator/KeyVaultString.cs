using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Web.Script.Serialization;

namespace JSON_validator
{
    public class KeyVaultString
    {
        public string connType;
        public int id;
        public gtpValues gtp;
        public wstrustValues wstrust;
        public sftpValues sFTP;        
    }

    public class gtpValues
    {
        public string user;
        public string pass;
    }

    public class wstrustValues
    {
        public string user;
        public string pass;
    }

    public class sftpValues
    {
        public string server;
        public string user;
        public string cert;
        public string clientRootPath;
    }
}
