<!--  Here we can customize the Subsecription page -->

<?php

// if (isset($_POST['submit'])) {
    
//     $servername = "localhost";
//     $username = "root";
//     $password = "root";
//     $dbname = "gallery";

//     $conn = mysqli_connect($servername, $username, $password, $dbname);

//     $newFileName = $_POST['filename'];
//     if (empty($newFileName)) {
//         $newFileName = "gallery";
//     } else {
//         $newFileName = strtolower(str_replace(" ", "-", $newFileName));
//     }

//     $imageTitle = $_POST['filetitle'];
//     $imageDesc = $_POST['filedescription'];
    
//     $file = $_FILES['file'];

//     $fileName = $file["name"];
//     $fileType = $file["type"];
//     $fileTempName = $file["tmp_name"];
//     $fileError = $file["error"];
//     $fileSize = $file["size"];

//     $fileExt = explode(".", $fileName);
//     $fileActualExt = strtolower(end($fileExt));

//     $allowed = array("jpg", "jpeg", "png");

//     if (in_array($fileActualExt, $allowed)) {
//         if ($fileError === 0) {
//             if($fileSize < 2000000) {
//                 $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
//                 $fileDestination = "../img/gallery/" . $imageFullName;

//                 echo "Ready to upload file";
//                 //include_once "dbname.inc.php"; 
               
//             }else 
//                 echo "File size is too big!";
//         } else {
//             echo "You had an error!";
//         }
//     } else {
//         echo "You need to upload a proper file type!";
//     }
// }

get_header();

if (have_posts()):
    while (have_posts()) : the_post(); ?>

    <article class="post page">
    
    <section class="gallery-links">
    <div class="wrapper">
    <h2>Gallery</h2>

        <div class="gallery-container">
            <?php

            include_once 'includes/dbh.inc.php';

            $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
            $stmt = mysqli_stmt_init();
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                // echo "SQL statement failed!";
            } else {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<a href="#">
                    <div style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                    <h3>'.$row["titleGallery"].'</h3>
                    <p>'.$row["desceGallery"].'</p>
                    </a>';
                }
            }

            echo
            '<a href="#">
            <div></div>
            <h3>This is a title</h3>
            <p>This is a paragraph</p>
            </a>';
            ?>
        </div>
        <div class="gallery-upload">
        <form action="<?php echo $_SERVER["REQUEST_URI"] ?>" method="post" enctype="multipart/form-data">
        <input type="text" name="filename" placeholder="File name...">
        <input type="text" name="filetitle" placeholder="Image title...">
        <input type="text" name="filedescription" placeholder="Image description">
        <input type="file" name="file">
        <button type="submit" name="submit">Upload</button>
        </form>
        </div>

    </div>
    </section>

    </article>
<?php endwhile;
else: 
    echo '<p> No content found </p> ';

endif;

get_footer();
?>