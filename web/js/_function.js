function Test_Form_Creare_Show_Field(checkbox, element) 
{
    let block = element;
    var container = $('#' + block + '-container');
    var filed = $('#' + block);
    
    if (checkbox.checked) 
    {
        container.css('display', 'block');
    } 
    else
    {
        container.css('display', 'none');
        filed.attr('value', ''); // Очищаем поле при скрытии
    }
}
function toggleEndField(checkbox) {
    var container = document.getElementById('end-container');
    var end = document.getElementById('end');
    
    if (checkbox.checked) {
        container.style.display = 'block';
    } else {
        container.style.display = 'none';
        end.value = ''; // Очищаем поле при скрытии
    }
}