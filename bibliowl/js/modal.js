const switchModal = () => {
    const modal = document.querySelector('.modal-info')
    const actualStyle = modal.style.display
    if(actualStyle == 'block') {
      modal.style.display = 'none'
    }
    else {
      modal.style.display = 'block'
    }
  }
  
  const btn = document.querySelector('.modalBtn')
  btn.addEventListener('click', switchModal)
  
  window.onclick = function(event) {
      const modal = document.querySelector('.modal-info')
    if (event.target == modal) {
      switchModal()
    }
  }