// This is a simple static file server to test your GitHub Pages deployment locally
const http = require('http');
const fs = require('fs');
const path = require('path');

const PORT = 8080;
const MIME_TYPES = {
  '.html': 'text/html',
  '.js': 'text/javascript',
  '.css': 'text/css',
  '.json': 'application/json',
  '.png': 'image/png',
  '.jpg': 'image/jpg',
  '.jpeg': 'image/jpeg',
  '.gif': 'image/gif',
  '.svg': 'image/svg+xml',
  '.ico': 'image/x-icon',
  '.ttf': 'font/ttf',
  '.woff': 'font/woff',
  '.woff2': 'font/woff2',
  '.eot': 'font/eot',
  '.otf': 'font/otf'
};

const server = http.createServer((request, response) => {
  console.log(`Request: ${request.url}`);
  
  let filePath = request.url;
  
  // Handle the root path
  if (filePath === '/') {
    filePath = '/index.html';
  }
  
  // Get the full path
  filePath = path.join(process.cwd(), filePath);
  
  // Get the file extension
  const extname = path.extname(filePath).toLowerCase();
  
  // Get the MIME type
  const contentType = MIME_TYPES[extname] || 'application/octet-stream';
  
  // Read the file
  fs.readFile(filePath, (error, content) => {
    if (error) {
      if(error.code === 'ENOENT') {
        // Page not found
        console.log(`File not found: ${filePath}`);
        fs.readFile(path.join(process.cwd(), '404.html'), (error, content) => {
          response.writeHead(404, { 'Content-Type': 'text/html' });
          response.end(content || '404 Not Found', 'utf-8');
        });
      } else {
        // Server error
        console.log(`Server error: ${error.code}`);
        response.writeHead(500);
        response.end(`Server Error: ${error.code}`);
      }
    } else {
      // Success
      response.writeHead(200, { 'Content-Type': contentType });
      response.end(content, 'utf-8');
    }
  });
});

server.listen(PORT, () => {
  console.log(`Server running at http://localhost:${PORT}/`);
  console.log(`To test your GitHub Pages setup, visit: http://localhost:${PORT}/`);
  console.log('Press Ctrl+C to stop the server');
});
