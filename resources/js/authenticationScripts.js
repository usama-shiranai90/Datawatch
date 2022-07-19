let adminErrorExists;
let employeeErrorExists;

function setAdminErrorStatus(error) {
  adminErrorExists = error;
}

function setEmployeeErrorStatus(error) {
  employeeErrorExists = error;
}

$(document).ready(function () {

  function switchTab(clickedElement) {
    let activate;
    let deactivate;
    $('#adminPanelTabID').add('#employeePanelTabID').each(function () {
      if (clickedElement.attr('id') == $(this).attr('id')) {
        activate = clickedElement
      } else {
        deactivate = $(this)
      }
    })


    activate.addClass('border-indigo-500 font-semibold bg-gray-200')
    activate.removeClass('text-gray-400 hover:text-black hover:border-black')
    deactivate.removeClass('border-indigo-500 font-semibold bg-gray-200')
    deactivate.addClass('text-gray-400 hover:text-black hover:border-black')

    if (clickedElement.attr('id') == 'adminPanelTabID') {
      $('form[name="employeeAuthenticationPanel"]').addClass('hidden')
      $('form[name="adminAuthenticationPanel"]').removeClass('hidden')
    } else if (clickedElement.attr('id') == 'employeePanelTabID') {
      $('form[name="employeeAuthenticationPanel"]').removeClass('hidden')
      $('form[name="adminAuthenticationPanel"]').addClass('hidden')
    }
  }

  $('#adminPanelTabID').add('#employeePanelTabID').on('focus', function () {
    switchTab($(this))
  })


  function showError(errorElement, text) {
    errorElement.removeClass('hidden').animate({
      maxHeight: '10rem',
      paddingTop: '0.5rem',
      paddingBottom: '0.5rem'
    }, 1000);

    // $('adminError > label').text(text)
    errorElement.find('label').text(text)
  }



})
