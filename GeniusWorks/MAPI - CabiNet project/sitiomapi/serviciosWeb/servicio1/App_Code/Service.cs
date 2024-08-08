using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;


[WebService(Namespace = "http://tempuri.org/")]
[WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
// Para permitir que se llame a este servicio web desde un script, usando ASP.NET AJAX, quite la marca de comentario de la línea siguiente. 
// [System.Web.Script.Services.ScriptService]
public class Service : System.Web.Services.WebService
{
    public Service () {

        //Eliminar la marca de comentario de la línea siguiente si utiliza los componentes diseñados 
        //InitializeComponent(); 
    }

    [WebMethod]
    public string HelloWorld() {
        return "Hello World";
    }
    [WebMethod]
    public int Sumar(int a, int b)
    {
        int c;
        c = a + b;
        return c;
    }
    [WebMethod]
    public string Sumar2(int a, int b)
    {
        int c;
        c = a + b;
        return "el valor de la suma es"+c.ToString ();
    }

    [WebMethod]
    public string conv_c_f(double  c)
    {
        double   f;
        
        f = (c * 1.8)  + 32;

        return "La equivalencia es: " + f.ToString() + "°F";
    }

    [WebMethod]
    public double conv_f_c(double f)
    {
        double c;

        c = (5 / 9) + 1;
        return c;
    }
    [WebMethod]
    public string ecu_2do_grado(double a, double b, double c)
    {
        double  r;
        double r2;

        r = (-b + Math.Sqrt((b * b) - (4 * a * c))) / (2 * a);
        r2 = (-b - Math.Sqrt((b * b) - (4 * a * c))) / (2 * a);
        return "Los resultados son " + r.ToString() + " y "+r2.ToString();
        
    }
}
