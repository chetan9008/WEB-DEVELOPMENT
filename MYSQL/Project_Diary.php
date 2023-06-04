<?php
session_start();
include("connection.php");
if (array_key_exists("id", $_COOKIE)) {
    $_SESSION["id"] = $_COOKIE["id"];
}
if (array_key_exists("id", $_SESSION)) {
    $query = "SELECT diary FROM information WHERE id = '" . mysqli_real_escape_string($link, $_SESSION["id"]) . "' LIMIT 1 ";
    if ($result = mysqli_query($link, $query)) {
        $row  = mysqli_fetch_array($result);
    }
} else {
    header("Location: Project.php");
}
?>
<?php
include("headerHTML.php");
?>
    <script type="text/javascript">
        $("textarea").on("change keyup paste", function() {
            $.ajax({
                method: "POST",
                url: "database.php",
                data: {
                    diary: $("textarea").val()
                }
            })
        });

        if (window.matchMedia("(max-width: 767px)").matches) {
            $("#text").width($(document).width());
            $("#text").height($(window).height());
        } else {
            $("#text").width($(document).width());
            $("#text").height($(window).height());
        }
        $("#green").click(function() {
            $("textarea").css("background-color", " rgb(173,247,182)");
        })
        $("#yellow").click(function() {
            $("textarea").css("background-color", "rgb(252,245,199)");
        })
        $("#orange").click(function() {
            $("textarea").css("background-color", " rgb(255,192,159)");
        })
        $("#hide").hide();
        $("#hover").hover(function() {

            $("#hide").toggle();
        })
    </script>
</body>

</html>