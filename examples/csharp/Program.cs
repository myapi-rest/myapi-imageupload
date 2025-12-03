using System;
using System.Net.Http;
using System.Net.Http.Json;
using System.Threading.Tasks;

class Program
{
    static async Task Main()
    {
        using var client = new HttpClient();
        client.DefaultRequestHeaders.Add("Authorization", "Bearer <API_KEY>");

        var payload = new
        {
            file_base64 = "<BASE_64_DATA>",
            file_name = "logo.png"
        };

        var response = await client.PostAsJsonAsync(
            "https://api.myapi.rest/api/image/upload",
            payload
        );

        Console.WriteLine(await response.Content.ReadAsStringAsync());
    }
}
