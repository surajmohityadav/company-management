<script>
const express = require('express');
const app = express();

app.post('/api/update-query-status', (req, res) => {
  // Handle the POST request and update the query status
  const newStatus = req.body.status; // assuming the status is passed as a POST parameter
  // code to update the query status goes here

  // Send a response back to the client
  res.send('Query status updated successfully!');
});

app.listen(3000, () => console.log('Server started on port 3000'));
</script>
