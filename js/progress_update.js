const select = document.getElementById("subject_select");
const table = document.getElementById("update_table_table");

select.addEventListener("input", tableUpdate);

function tableUpdate(){
    const no_chaps = select.value;
  table.innerHTML = `<tr><td>Chap No</td><td>Status</td></tr>`;
    for(let i = 1; i <= no_chaps; i++){
        table.innerHTML += `<tr><td>${i}</td><td><input type="checkbox" name="" id=""></td></tr>`;
    }
}

function dropdown() {
  $.ajax({
    url: "../get_subjects.php",
    type: "GET",
    dataType: "json", // added data type
    success: function (res) {
      for (const key in res) {
        const sub_id = key.split(" ")[0];
        select.innerHTML += `<option value="${res[key]}" ${sub_id == "101" ? "selected" : ''}>${key}</option>`;
      }
      tableUpdate();
    },
  });
}

dropdown();