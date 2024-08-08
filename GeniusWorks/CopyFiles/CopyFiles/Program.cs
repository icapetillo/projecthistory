using System;
using System.IO;
using System.Linq;

namespace CopyFiles
{
    class Program
    {
        static void Main(string[] args)
        {
            /*
             *  string sourcePath = @"E:\test222";
                string targetPath =  @"E:\TestFolder"; 

                var extensions = new[] {".txt", ".pdf", ".doc" }; // not sure if you really wanted to filter by extension or not, it kinda seemed like maybe you did. if not, comment this out

                var files = (from file in Directory.EnumerateFiles(sourcePath)
                                where extensions.Contains(Path.GetExtension(file), StringComparer.InvariantCultureIgnoreCase) // comment this out if you don't want to filter extensions
                                select new 
                                            { 
                                                Source = file, 
                                                Destination = Path.Combine(targetPath, Path.GetFileName(file))
                                            });

                foreach(var file in files)
                {
                    File.Copy(file.Source, file.Destination);
                }
             */
            string sourcePath = @"D:\Google Fotos Backup";
            string targetPath = @"D:\Google Fotos Trash";

            var extensions = new[] { ".png", ".jpg", ".jpeg", ".gif", ".mp4" };

            //var files = Directory.GetFiles(sourcePath);

            var files = (from file in Directory.EnumerateFiles(sourcePath)
                         where extensions.Contains(Path.GetExtension(file), StringComparer.InvariantCultureIgnoreCase)
                         select new
                         {
                             Source = file,
                             Destination = Path.Combine(targetPath, Path.GetFileName(file))
                         });

            Console.WriteLine("Copiando...");

            foreach (var file in files)
            {
                if (file.Contains("editado"))
                {
                    var filename = Path.GetFileName(file);
                    File.Move(Path.Combine(sourcePath, filename), Path.Combine(targetPath, filename), true);
                }
                
            }

            Console.WriteLine("Copia completa");
        }
    }
}
