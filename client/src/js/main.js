import tooltip from './components/tooltip';

tooltip();

var form = document.getElementById('MemberLoginForm_LoginForm')

form.addEventListener('submit', function(e) {
  form.className += " loading";
})
