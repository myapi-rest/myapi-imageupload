# myapi.rest — Image Upload API

Upload images via a simple REST API and receive a hosted URL plus metadata such as file size, content type, and processing time.

This repository contains:

- Documentation in `/docs`
- Language examples in `/examples`
- A Postman collection in `/examples/postman`

---

## 🚀 Quick Example

```bash
curl --location 'https://api.myapi.rest/api/image/upload' \
  --header 'Content-Type: application/json' \
  --header 'Authorization: Bearer <API_KEY>' \
  --data '{
    "file_base64": "<BASE_64_DATA>",
    "file_name": "logo.png"
  }'
```

**Sample response:**

```json
{
  "id": "11",
  "url": "https://myapi.rest/images/11/29086085d6124aeabb7629c013563d3f.png",
  "size": 1592,
  "content_type": "image/png",
  "ms": 67
}
```
