function openCity(event) {
    $(document).ready(function () {
        const selectCity = $("#selectKota");
        const selectProv = $(event.target);
        $(".city-option").remove();
        $.ajax({
            type: "GET",
            url: "/get-city",
            data: { id: selectProv.val() },
            success: function (data) {
                Object.values(data.city).forEach((val) => {
                    const city_name = val.type + " " + val.city_name;
                    selectCity.append(
                        $("<option>", {
                            value: val.city_id,
                            text: city_name,
                        }).addClass("city-option")
                    );
                });
                selectCity.removeAttr("disabled");
            },
        });
    });
}
