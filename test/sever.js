const express = require('express');
const path = require('path');
const app = express();
const PORT = 3000;

// Public files
app.use(express.static(path.join(__dirname, 'public')));

// Route to product detail page
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'views/product.html'));
});

app.listen(PORT, () => {
  console.log(`Server running at http://localhost:${PORT}`);
});
