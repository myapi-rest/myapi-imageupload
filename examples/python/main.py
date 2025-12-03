import requests

payload = {
    "file_base64": "<BASE_64_DATA>",
    "file_name": "logo.png"
}

response = requests.post(
    "https://api.myapi.rest/api/image/upload",
    headers={
        "Authorization": "Bearer <API_KEY>",
        "Content-Type": "application/json"
    },
    json=payload
)

print(response.text)
