[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![Website](https://img.shields.io/badge/site-myapi.rest-0EA5E9)](https://myapi.rest)
[![Discussions](https://img.shields.io/badge/discussions-join-2563EB)](https://github.com/myapi-rest/myapi.rest/discussions)
[![myapi.rest Suite](https://img.shields.io/badge/myapi.rest-API%20Suite-0F766E)](https://github.com/myapi-rest)

# myapi.rest — Image Upload API

Upload and host images instantly via a simple REST API.

## Features
- Upload Base64‑encoded images  
- Automatic content type detection  
- Returns hosted image URL  
- Fast and lightweight  

## Quick Example

```bash
curl --location 'https://api.myapi.rest/api/image/upload'   --header 'Authorization: Bearer <API_KEY>'   --header 'Content-Type: application/json'   --data '{
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

## Documentation
See the [`/docs`](./docs) folder for full usage guides, examples, errors, and endpoint details.

## Examples
Language examples are available in the [`/examples`](./examples) directory, including:
- C#
- JavaScript
- Python
- PHP
- Postman Collection

## myapi.rest Suite

This API is part of the broader **myapi.rest** developer suite.  
For all APIs, documentation, and examples, visit:

👉 https://github.com/myapi-rest/myapi.rest
