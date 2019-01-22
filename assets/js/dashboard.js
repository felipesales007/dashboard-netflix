// para o abrir e fechar dos collapse do menu lateral
$(".fe-menu-lateral").click(function() {
    if ($("div").hasClass("in")) {
        $(".in").collapse("hide");
    } else {
        $(".in").collapse("show");
    }
});

// para tabela	
$(document).ready(function() {
    $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        responsive: true,
        language: {
        search: "_INPUT_",
            searchPlaceholder: "Search records",
        }
    });

    var table = $('#datatables').DataTable();
    // clique em editar
    table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        alert('Você pressiona na linha: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s linha.');
    });

    // clique em delete
    table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
    });

    // clique em curtir
    table.on( 'click', '.like', function () {
        alert('Você clicou no botão curtir');
    });
});