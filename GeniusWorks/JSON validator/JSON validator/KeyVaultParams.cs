using System;
using System.Collections.Generic;

namespace JSON_validator
{
    public class KeyVaultParam
    {
        public DateTime createdDate;
        public DateTime updatedDate;
        public string secretIdentifier;
        public bool setActivationDate;
        public bool setExpirationDate;
        public bool isEnabled;
        public string contentType;
        public string secretValue;
        public List<Tag> tags;
    }    

    public class Tag
    {
        public string tagName;
        public string tagValue;
    }
}
