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
// Para permitir que se llame a este servicio web desde un script, usando ASP.NET AJAX, quite la marca de comentario de la siguiente línea. 
// [System.Web.Script.Services.ScriptService]
public class WebService1 : System.Web.Services.WebService 
{
    public WebService1()
    {
        //
        // TODO: agregar el código de constructor necesario
        //
    }

    // EJEMPLO DE SERVICIO WEB
    // El servicio de ejemplo HelloWorld() devuelve la cadena Hola a todos.

    [WebMethod]
    public string HelloWorld()
    {
        return "BIENVENIDOS AL MUNDO DE CARAMELO";
    }

    [WebMethod]
    public string sumar(int a, int b)
    {
        int c;
        c = a + b;
        return "EL RESULTADO DE LA SUMA ES:" + c.ToString();
    }



    [WebMethod]
    public string conv_c_f(double c)
    {
        double f;

        f = (c * 1.8) + 32;

        return "GRADOS FARENHEIT: " + f.ToString() + "°F";
    }

    [WebMethod]
    public string conv_f_c(double f)
    {
        double c;

        c = (f - 32) * .555556;
        return "La equivalencia es: " + c.ToString() + "°C";
    }

    [WebMethod]
    public string ecu_2do_grado(double a, double b, double c)
    {
        double r;
        double r2;

        r = (-b + Math.Sqrt((b * b) - (4 * a * c))) / (2 * a);
        r2 = (-b - Math.Sqrt((b * b) - (4 * a * c))) / (2 * a);
        return "Los resultados son " + r.ToString() + " y " + r2.ToString();

    }
}
