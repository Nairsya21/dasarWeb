<?php
if (isset($_POST['submit'])) {
    $targetDirectory="documents/"; // direktori untuk menyimpan file
    $targetFile=$targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $documentType= strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions=array("txt", "pdf", "doc", "docx");

    $maxFileSize = 10*1024*1024;
    
    if (in_array($documentType, $allowedExtensions)&& $_FILES["fileToUpload"]["size"]<= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
        } else{
            echo "Gagal mengunggah dokumen.";
        }
    } else{
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
}
}

//MENAMBAHKAN FILE THUMBNAIL

    // $targetDirectory = "uploads/";
    // $targetFile = $targetDirectory. basename($_FILES["fileToUpload"]["name"]);
    // $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // $allowedExtensions = array("jpg","jpeg","png","gif") ;

    // $maxFileSize = 5 * 1024* 1024;

    // if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
    //     if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    //         // Membuat thumbnail
    //         $thumbnailWidth = 200;
    //         $originalImage = imagecreatefromstring(file_get_contents($targetFile));
    //         $originalWidth = imagesx($originalImage);
    //         $originalHeight = imagesy($originalImage);
    //         $thumbnailHeight = floor($originalHeight * ($thumbnailWidth / $originalWidth));

    //         $thumbnailImage = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
    //         imagecopyresampled($thumbnailImage, $originalImage, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, $originalWidth, $originalHeight);

    //         $thumbnailFileName = $targetDirectory . "thumbnail_" . basename($_FILES["fileToUpload"]["name"]);
            
    //         // Simpan thumbnail
    //         imagejpeg($thumbnailImage, $thumbnailFileName);
            
    //         // Hapus gambar sumber yang diunggah
    //         unlink($targetFile);

    //         // Tampilkan thumbnail
    //         echo "File berhasil diunggah.<br>";
    //         echo "<img src='$thumbnailFileName' alt='Thumbnail'>";
    //     } else {
    //         echo "Gagal mengunggah file";
    //     }
    // } else{
    //     echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    // }

?>