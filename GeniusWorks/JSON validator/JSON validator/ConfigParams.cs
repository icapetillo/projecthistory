using System.Collections.Generic;

namespace JSON_validator
{
    public class ConfigParams
    {
        public int fileConcurrency;
        public List<string> notifyUsers;
        public sFTPTransportValues sFTPTransport;
        public blobTransportValues blobTransport;
    }

    public class sFTPTransportValues
    {
        public bool enabled;
    }

    public class blobTransportValues
    {
        public bool enabled;
        public string container;
    }
}
