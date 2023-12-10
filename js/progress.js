function linkButtons(){
    wrapper = document.getElementById("subject_select_wrapper");
    $.ajax({
        url: "get_subjects.php",
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            for(const key in res){
                const sub_id = key.split(" ")[0];
                wrapper.innerHTML += `<a data-subject-id="${sub_id}" href="">${key}</a>`; 
            }
        }
    });
}

linkButtons();