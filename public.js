$(document).ready(function() {
    for (let i = 1; i <= 10; i++) {
        const id = `#combo${i}`;
        $(id).on('focus', function() {
            loadCombo(i, '', 0);
        });

        $(id).on('input', function() {
            loadCombo(i, this.value, 0);
        });
    }

    function loadCombo(comboNumber, search = '', offset = 0) {
        $.get(`/fetch/combo${comboNumber}`, { search, offset }, function(data) {
            const select = $(`#combo${comboNumber}`);
            select.empty();
            data.forEach(item => {
                select.append(new Option(item.name, item.id));
            });
        });
    }
});
