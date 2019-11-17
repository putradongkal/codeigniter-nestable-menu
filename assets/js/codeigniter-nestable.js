var base_url = $('meta[name="url"]').attr('content');

function makeUL(lst) {
    var html = [];                
    html.push('<ol class="dd-list">');

    $(lst).each(function() { 
    	html.push(makeLI(this)) 
    });

    html.push('</ol>');      
    return html.join("\n");
}
                
function makeLI(elem) {
    var html = [];                
    html.push('<li class="dd-item" data-id="'+elem.menu_id+'">');

    if (!jQuery.isEmptyObject(elem.child))
		html.push('<button data-action="collapse" type="button" style="display: block;">Collapse</button>')
		html.push('<button data-action="expand" type="button" style="display: none;">Expand</button>')

    html.push('<div class="dd-handle">' + elem.menu_name + '</div>');

    if (!jQuery.isEmptyObject(elem.child))
        html.push(makeUL(elem.child));
    html.push('</li>');
    return html.join("\n");
}

var subIndicTreeObj = [];

function findLiChild($obj, parentId) {
    $obj.find('> ol > li').each(function(index1, value1) {
        subIndicTreeObj.push({
            'id': $(this).attr('data-id'),
            'parent_id': parentId
        });

        findOlChild($(this));
    });
}

function findOlChild($obj) {
    if ($obj.has('ol').length > 0) {
        findLiChild($obj, $obj.attr('data-id'));
    }
}

$(function() {
	$('.dd').nestable();
    $.ajax({
	  	type: "POST",
	  	url: base_url + "menu/getAjaxmenu",
	  	data: {},
	  	cache: false,
	  	dataType:"json",
	  	success: function(result){
	  		$(".dd").html(makeUL(result));
	  	},
	  	error: function(jqXHR, textStatus, errorThrown) { 
            swal({
                icon: "error",
                title: "Something wrong",
                text: errorThrown
            });
	  	}
	});

	$('.btn-save').on('click', function (e) {
        subIndicTreeObj = [];
        var btnSave = $(this);
        findOlChild($('#nestable'));
        e.preventDefault();
        $(this).attr('disabled', true);
        $(this).html('<i class="fas fa-spinner fa-spin"></i>');
        $.ajax({
            type:"POST",
            url: base_url + "menu/postAjaxmenu",
            data:{data:subIndicTreeObj},
            success:function(data){
                console.log(data.success)
                if(data.success === true){
                    btnSave.attr('disabled', false);
                    btnSave.html('Save');
                    swal({
                        icon: "success",
                        title: "Save Successfully"
                    });
                }
            },
            error:function(jqXHR, textStatus, errorThrown){
                swal({
                    icon: "error",
                    title: "Something wrong",
                    text: errorThrown
                });
                btnSave.attr('disabled', false);
                btnSave.html('Save');
            }
        });
    });
});