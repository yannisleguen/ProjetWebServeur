function select_change_triporwork() {
if (document.chose_by.workortrip.options.selectedIndex == 0)
document.getElementById('form_trip').style.display = 'inline';
else
document.getElementById('form_trip').style.display = 'none';
if (document.chose_by.workortrip.options.selectedIndex == 1)
document.getElementById('form_work').style.display = 'inline';
else
document.getElementById('form_work').style.display = 'none';

}

