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
    public double calcularIMC(double peso, double est)
    {
        double imc;
        imc = peso / Math.Pow(est, 2);        
        return imc;
    }

    [WebMethod]
    public string diagnostico(double imc)
    {
        string estado;
        if (imc < 18.5)
        {
            estado = "Peso debajo del normal";
        }
        else
        {
            if (imc < 25)
            {
                estado = "Peso normal";
            }
            else
            {
                estado = "Sobrepeso";
            }
        }
        return estado;
    }
}
