<?php require_once("./db_connect.php"); ?>


<?php
include("./template/sidebar.php");
?>

<?php
include("./template/header.php");
?>

<section class=" bg-gray-200 p-10">
  <ol class="flex items-center whitespace-nowrap ">
    <li class="inline-flex items-center">
      <a href="./customer-create-list.php" class="flex items-center text-sm text-muted-foreground-1 hover:text-primary-focus focus:outline-hidden focus:text-primary-focus">
        Staff Catalogue
      </a>
      <svg class="shrink-0 mx-2 size-4 text-muted-foreground" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6" />
      </svg>
    </li>

    <li class="inline-flex items-center text-sm font-semibold text-foreground truncate" aria-current="page">
      Edit Staff
    </li>
  </ol>

  <hr class=" border-gray-400 my-5">

  <?php
  $id = $_GET["row_id"];

  $sql = "SELECT * FROM staffs WHERE id=$id";

  $query = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($query);

  ?>
  <form action="./staff-update.php" method="post">
    <div class=" flex gap-3 mb-5">
      <input class="py-2.5 sm:py-3 px-4 rounded-lg block w-full bg-layer border-layer-line sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none" type="hidden" name="row_id" value="<?= $row['id'] ?>">
      <input class="py-2.5 sm:py-3 px-4 rounded-lg block w-full bg-layer border-layer-line sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none" type="text" name="name" value="<?= $row['name'] ?>" required>
      <input class="py-2.5 sm:py-3 px-4 rounded-lg block w-full bg-layer border-layer-line sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none" type="number" name="phone-no" value="<?= $row['phone-no'] ?>" required>
      <input class="py-2.5 sm:py-3 px-4 rounded-lg block w-full bg-layer border-layer-line sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none" type="text" name="gender" value="<?= $row['gender'] ?>" required>
      <input class="py-2.5 sm:py-3 px-4 rounded-lg block w-full bg-layer border-layer-line sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none" type="date" name="date-of-birth" value="<?= $row['date-of-birth'] ?>" required>
      <button class="w-full py-3 px-4 bg-blue-600 text-white justify-center inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-focus disabled:opacity-50 disabled:pointer-events-none">Update</button>
    </div>
  </form>


</section>




<?php include("./template/footer.php"); ?>