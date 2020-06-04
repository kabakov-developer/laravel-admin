// var delete_form_submit = function(form) {
//   if (confirm('Вы действительно хотите удалить запись?')) {
//     $(form).submit();
//   }
// };

$(document).ready(function(){
	$('.datepicker').datepicker({
		format: 'dd-mm-yyyy',
	});

	try{CKEDITOR.replace('ckeditor')}catch{};


	$('.file-remover').click(function(e){
		e.preventDefault();
		var $this = $(this);
		var link = $(this).attr('href');

		$.ajax({
            url: link,
            method: "POST",
            dataType: 'json',
            success: function(data) {
                if(data.status == "Delete") {
                	$this.parent('.image-wrap').find('.attachment-wrap').remove();
                	$this.remove();
                }
            },
            error: function(xhr) {
                data = xhr.responseJSON;
                if(xhr.status==422) {
                }             
            }
        });
	});

    $('.image-del').click(function(e){
        e.preventDefault();
        var $this = $(this);
        var link = $(this).attr('href');

        $.ajax({
            url: link,
            method: "GET",
            dataType: 'json',
            success: function(data) {
                if(data.status == "Delete") {
                    $this.parents('.item-gallery').remove();
                    $this.remove();
                }
            },
            error: function(xhr) {
                data = xhr.responseJSON;
                if(xhr.status==422) {
                }             
            }
        });
    });


    uploadComplete = 0;
    var multiple_fileConfig = {
        runtimes : "html5,flash,silverlight,html4",
        browse_button : "multiplefiles_pickfiles", // you can pass an id...
        container: document.getElementById("image_container"), // ... or DOM Element itself
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : "/admin/"+$('#send').data('controller') +"/file/plupload",
        chunk_size: "200kb",
        width: 1200,
        height: 1200,

        filters : {
            max_file_size : "212000mb",
        },

        init: {
            PostInit: function() {
                document.getElementById("file-uploader").innerHTML = "";
                uploadComplete++;
            },

            FilesAdded: function(up, files) {
                plupload.each(files, function(file) {
                    document.getElementById("file-uploader").innerHTML += "<div id=\"" + file.id + "\">" + file.name + " (" + plupload.formatSize(file.size) + ") <b></b></div>";
                });
            },

            UploadProgress: function(up, file) {
                document.getElementById(file.id)
                    .getElementsByTagName("b")[0]
                    .innerHTML = "<span>" + file.percent + "%</span>";
            },

            Error: function(up, err) {
                //document.getElementById("image_console").appendChild(document.createTextNode("\nError #" + err.code + ": " + err.message));
            },
            UploadComplete: function(e) {

                uploadComplete--;
                if (! uploadComplete) {
                    var form = multiple_fileUploader.getOption('form');
                    form.submit();
                }
            }
        }
    }


    var multiple_GalleryConfig = {
        runtimes : "html5,flash,silverlight,html4",
        browse_button : "image_pickfiles", // you can pass an id...
        container: document.getElementById("image_container"), // ... or DOM Element itself
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : "/admin/"+$('#send').data('controller') +"/gallery/plupload/" + $('#id').val(),
        chunk_size: "200kb",
        width: 1200,
        height: 1200,

        filters : {
            max_file_size : "212000mb",
        },

        init: {
            PostInit: function() {
                document.getElementById("img-uploader").innerHTML = "";
                uploadComplete++;
            },

            FilesAdded: function(up, files) {
                plupload.each(files, function(file) {
                    document.getElementById("img-uploader").innerHTML += "<div id=\"" + file.id + "\">" + file.name + " (" + plupload.formatSize(file.size) + ") <b></b></div>";
                });
            },

            UploadProgress: function(up, file) {
                document.getElementById(file.id)
                    .getElementsByTagName("b")[0]
                    .innerHTML = "<span>" + file.percent + "%</span>";
            },

            Error: function(up, err) {
                //document.getElementById("image_console").appendChild(document.createTextNode("\nError #" + err.code + ": " + err.message));
            },
            UploadComplete: function(e) {

                uploadComplete--;
                if (! uploadComplete) {
                    var form = multiple_galleryUploader.getOption('form');
                    form.submit();
                }
            }
        }
    }
    var multiple_galleryUploader = new plupload.Uploader(multiple_GalleryConfig);
    multiple_galleryUploader.init();


    var multiple_fileUploader = new plupload.Uploader(multiple_fileConfig);
    multiple_fileUploader.init();


    $('#send').click(function(e) {
        e.preventDefault();
        var form = $(this).closest('form');

        if (form.find('#file-uploader').length){
            multiple_fileUploader.setOption('form', form);
            
            multiple_fileUploader.start();
        } else if(form.find('#img-uploader').length) {
            multiple_galleryUploader.setOption('form', form);
            
            multiple_galleryUploader.start();
        } else {
            form.submit();
        }
    });

})
// var crudtable


// $(function() {

//   // Register an API method that will empty the pipelined data, forcing an Ajax
//   // fetch on the next draw (i.e. `table.clearPipeline().draw()`)
//   $.fn.dataTable.Api.register( 'clearPipeline()', function () {
//       return this.iterator( 'table', function ( settings ) {
//           settings.clearCache = true;
//       } );
//   } );
   
//   var params = $('#jsParams').text();

//   if (params) {
//     params = JSON.parse(params);
//     params["ajax"] = {
//       url: params['ajax_url'],
//       type: 'POST',
//             pages: 5 // number of pages to cache
//         };
//   }

//   $('.data-table-filter').on( 'keyup change', function () {
//       initCrudTableSearch()
//     });

//   crudtable = $("#crudtable").show().DataTable(params);
  
//   crudtable.on( 'row-reorder', function ( e, diff, edit ) {
//         var result = 'Reorder started on row: '+ edit.triggerRow.data()['DT_RowId']+'\n\r';
 
//         for ( var i=0, ien=diff.length ; i<ien ; i++ ) {
//             var rowData = crudtable.row( diff[i].node ).data();

//         var offset = crudtable.page() * crudtable.page.info().length;

//         // $($(diff[i].node).find('td')[0]).html(diff[i].newPosition + 1);
//         console.log(offset);

//         $.post(params.draggable, {
//           id: rowData['id'],
//           newPosition: offset + diff[i].newPosition + 1,
//         });

//             result += rowData['DT_RowId']+' updated to be in position '+
//                 diff[i].newPosition+' (was '+diff[i].oldPosition+')\n\r';
//         }
//     } );



//     $('#reset-table-filter').unbind();
//     $('#reset-table-filter').click(function (e) {
//       $('#table .search-row input').val('');
//       crudtable.search('').draw(false);

//     })
//   $('.clean-btn').click(function() {
//     var input = $(this).parent().parent().find('input')
//     input.val('')
//     initCrudTableSearch()
//   })
// });



// function initCrudTableSearch() {
//   data = {};
//   $('.data-table-filter').each(function() {
//     data[$(this).attr('name')] = $(this).val();
//     data_json = JSON.stringify(data);
//   });
//   crudtable.search( data_json ).draw(false);
// }
