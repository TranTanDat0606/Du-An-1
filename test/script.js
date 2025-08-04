function changeImage(imgElement) {
    document.getElementById('main-image').src = imgElement.src;
  }
  
  function openTab(tabId) {
    document.querySelectorAll('.tab-content').forEach(tab => tab.style.display = 'none');
    document.getElementById(tabId).style.display = 'block';
  }
  