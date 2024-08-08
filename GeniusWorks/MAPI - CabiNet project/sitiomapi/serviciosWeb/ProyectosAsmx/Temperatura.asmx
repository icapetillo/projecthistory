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
        return "Hello World";
    }
    [WebMethod]
    public int sumar(int a, int b)
    {
        int c;
        c = a + b;
        return c;
    }

    [WebMethod]
    public int grados(int a) // grados es el nombre que va aparecer en la pagina web como 
    //una etiqueta
    {
        int r;
        r = a * (9 / 5) + 32;
        return r;
    }

    [WebMethod]
    public int farenheit(int a)
    {
        int r;
        r = (a - 32) / (9 / 5);
        return r;
    }
}
