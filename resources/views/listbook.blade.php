
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>create book</title>
</head>
<body>
    <script>
        /* Create two equal columns that floats next to each other */
            .column {
            float: left;
            width: 50%;
            padding: 10px;
            }

            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }
    </script>
            <!-- Load Font Awesome Icon Library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <!-- Buttons to choose list or grid view -->
            <button onclick="listView()"><i class="fa fa-bars"></i> List</button>
            <button onclick="gridView()"><i class="fa fa-th-large"></i> Grid</button>

            <div class="row">
                @foreach ($books as $book)
                    <div class="column {{ $book->id }}" style="background-color:#aaa;">
                        <h2>{{ $book->id }} {{ $book->judul }}</h2>
                        <p>{{ $book->penulis }}</p>
                        <p>{{ $book->jumlahhalaman }}</p>
                        <p>{{ $book->terbit }}</p>
                        <p><a href="{{route('vieweditbook', ['id'=>$book->id])}}"><button type="submit" class="btn btn-success"><b>EDIT</b></button></a></p>
                    </div>
                    <br>
                @endforeach
            </div>

            <br>
            <form method="get" action="/">
                <button type="submit"><b>HOME</b></button>
            </form>
    <script>
        // Get the elements with class="column"
        var elements = document.getElementsByClassName("column");

        // Declare a loop variable
        var i;

        // List View
        function listView() {
            for (i = 0; i < elements.length; i++) {
                elements[i].style.width = "100%";
            }
        }

        // Grid View
        function gridView() {
            for (i = 0; i < elements.length; i++) {
                elements[i].style.width = "50%";
            }
        }
    </script>
</body>
</html>
