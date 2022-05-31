const store = () => {
    const StoreValue = $("#store").val();
     $(".store").empty();
     $(".iframe").empty();
     if(StoreValue==0){
        $(".store").append("<h1><center>Pls Select Your stor</center></h1>")
        return null
    }
     $(".store").append("<h1><center>Pls Select Your City</center></h1>")
};

const storeCity=()=> {
    const StoreValue = $("#store").val();
    const CityValue = $("#storeCity").val();
    if(CityValue==0){
        $(".store").empty();
        $(".iframe").empty();
        $(".store").append("<h1><center>Pls Select Your City</center></h1>")
        return null
    }
    var data = {
        store: StoreValue,
        city: CityValue,
    };
    $.ajax({
        url: "http://localhost:8000/api/store/",
        type: "get",
        data: data,
        success: function (res) {
            $(".store").empty();
            $(".iframe").empty();
            if(res.store.length==0){
                $(".store").append("<h1><center>we are coming soon</center></h1>");
                return null
            }
            const ifram=res.ifram[0].ifram
            for (var i = 0; i < res.store.length; i++) {
                var html =
                    '<p class="storehead">' +
                    res.store[i].storename +
                    '</p><p class="storedata">' +
                    res.store[i].storeaddress +
                    '</p>';
                $(".store").append(html);
            }
            $(".iframe").append(ifram);
        },
    });
}
