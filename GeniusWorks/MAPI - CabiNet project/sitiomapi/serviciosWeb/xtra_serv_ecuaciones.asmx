<%@ WebService Language="C#" Class="WebService1" %>

using System;
using System.Collections;
using System.ComponentModel;
using System.Data;
using System.Diagnostics;
using System.Web;
using System.Web.Services;

[WebService(Namespace = "http://tempuri.org/")]
[WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
// To allow this Web Service to be called from script, using ASP.NET AJAX, uncomment the following line. 
// [System.Web.Script.Services.ScriptService]
public class WebService1 : System.Web.Services.WebService 
{
    public WebService1()
    {
        //
        // TODO: Add any constructor code required
        //
    }

    // WEB SERVICE EXAMPLE
    // The HelloWorld() example service returns the string Hello World.

   [WebMethod]
    public string  sistema(double a,double b,double c,double d,double e,double f)
    {

        double x=0,y=0;
        x = e * d - b * f / a * d - b * c;
        y = a * f - e * c / a * d - b * c; 
        string r;
        r = "X= "+x+" Y="+y;
        return r;
   
        }
}
    

