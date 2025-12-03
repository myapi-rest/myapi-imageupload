# Endpoints — Image Upload API

Base URL: `https://api.myapi.rest`

---

## POST `/api/image/upload`

Upload an image as base64-encoded content.

### Request body

| Field       | Type   | Required | Description                                      |
|-------------|--------|----------|--------------------------------------------------|
| file_base64 | string | Yes      | Base64-encoded image data.                       |
| file_name   | string | Yes      | File name including extension (e.g. `logo.png`). |

Example:

```json
{
  "file_base64": "<BASE_64_DATA>",
  "file_name": "logo.png"
}
```

### Success response (200 OK)

```json
{
  "id": "11",
  "url": "https://myapi.rest/images/11/29086085d6124aeabb7629c013563d3f.png",
  "size": 1592,
  "content_type": "image/png",
  "ms": 67
}
```

### Response fields

| Field        | Type    | Description                                      |
|--------------|---------|--------------------------------------------------|
| id           | string  | Internal identifier for the stored image.        |
| url          | string  | Public URL where the image is accessible.        |
| size         | number  | File size in bytes.                              |
| content_type | string  | Detected MIME type of the image (e.g. image/png).|
| ms           | number  | Time taken to process the upload (milliseconds). |

### Error response example

```json
{
  "type": "https://tools.ietf.org/html/rfc9110#section-15",
  "title": "Invalid request",
  "status": 400,
  "detail": "file_base64 is required",
  "instance": "/api/image/upload"
}
```
