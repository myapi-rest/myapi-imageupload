const payload = {
  file_base64: "<BASE_64_DATA>",
  file_name: "logo.png"
};

fetch("https://api.myapi.rest/api/image/upload", {
  method: "POST",
  headers: {
    "Authorization": "Bearer <API_KEY>",
    "Content-Type": "application/json"
  },
  body: JSON.stringify(payload)
})
  .then(res => res.text())
  .then(console.log)
  .catch(console.error);
