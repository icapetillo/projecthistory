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
    public string VentaTArie(string comp, string numero, string vend, int monto)
    {
        string respuesta;
        DateTime hoy;
        hoy = DateTime.Now;
        //Verificar que la compañía sea correcta
        if ((comp == "11") || (comp == "12") || (comp == "13"))
        {
            //Verificar que el saldo sea correcto
            if ((monto == 10) || (monto == 20) || (monto == 30) || (monto == 50) || (monto == 100) || (monto == 200) || (monto == 300) || (monto == 500))
            {
                //Verificar que el número de celular tenga 10 digitos
                if (numero.Length == 10)
                {
                    //Resultado exitoso
                    respuesta = "La operación se realizó con éxito. \n";
                    respuesta += "FOLIO  No. " + comp + monto.ToString() + vend + "\n";
                    respuesta += "Numero: " + numero + "\n";
                    respuesta += "Monto: " + monto.ToString() + "\n";
                    respuesta += "Fecha: " + hoy.ToShortDateString() + "\n";
                }
                else
                {
                    respuesta = "El numero debe tener 10 digitos";
                }
            }
            else
            {
                respuesta = "El saldo debe ser correcto";
            }
        }
        else
        {
            respuesta = "Numero de compañía incorrecto";
        }
        return respuesta;
    }
}
