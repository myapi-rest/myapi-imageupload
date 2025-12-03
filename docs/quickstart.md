# Quickstart — Image Upload API

Use this API to upload an image as base64-encoded data and receive a hosted URL and metadata in response.

---

## 1. Upload an image

```bash
curl --location 'https://api.myapi.rest/api/image/upload' \
  --header 'Content-Type: application/json' \
  --header 'Authorization: Bearer <API_KEY>' \
  --data '{
    "file_base64": "<BASE_64_DATA>",
    "file_name": "logo.png"
  }'
```

### Sample response

```json
{
  "id": "11",
  "url": "https://myapi.rest/images/11/29086085d6124aeabb7629c013563d3f.png",
  "size": 1592,
  "content_type": "image/png",
  "ms": 67
}
```

---

## 2. Use a language example

See the `/examples` folder for ready-to-run examples in:

- C#
- JavaScript (Node)
- Python
- PHP
