<?php require_once("./db_connect.php"); ?>
<?php
include("./template/sidebar.php");
?>

<?php
include("./template/header.php");
?>

<section class=" bg-gray-200 p-10">
  <ol class="flex items-center whitespace-nowrap ">

    <li class="inline-flex items-center text-sm font-semibold text-foreground truncate" aria-current="page">
      Staff Catalogue
    </li>
  </ol>

  <hr class=" border-gray-400 my-5">
  <form action="./staff-store.php" method="post">
    <div class=" flex gap-3">
      <input placeholder="Staff Name" class="py-2.5 sm:py-3 px-4 rounded-lg block w-full bg-layer border-layer-line sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none" type="text" name="name" required>
      <input placeholder="Staff id" class="py-2.5 sm:py-3 px-4 rounded-lg block w-full bg-layer border-layer-line sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none" type="number" name="staff-id" required>
      <input placeholder="Phone No" class="py-2.5 sm:py-3 px-4 rounded-lg block w-full bg-layer border-layer-line sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none" type="text" name="phone-no" required>
      <input placeholder="Gender" class="py-2.5 sm:py-3 px-4 rounded-lg block w-full bg-layer border-layer-line sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none" type="text" name="gender" required>
      <input placeholder="Date Of Birth" class="py-2.5 sm:py-3 px-4 rounded-lg block w-full bg-layer border-layer-line sm:text-sm text-foreground placeholder:text-muted-foreground-1 focus:border-primary-focus focus:ring-primary-focus disabled:opacity-50 disabled:pointer-events-none" type="date" name="date-of-birth" required>
      <button class="w-full py-3 px-4 bg-blue-600 text-white justify-center inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-primary border border-primary-line text-primary-foreground hover:bg-primary-hover focus:outline-hidden focus:bg-primary-focus  disabled:opacity-50 disabled:pointer-events-none">Add</button>
    </div>
  </form>

  <!-- Table -->
  <div class="min-w-full">
    <div class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-none [&::-webkit-scrollbar-track]:bg-scrollbar-track [&::-webkit-scrollbar-thumb]:bg-scrollbar-thumb">
      <table class="min-w-full divide-y divide-table-line">
        <thead>
          <tr>
            <th class="px-6 py-3 text-start text-xs font-medium text-muted-foreground-1 uppercase">#</th>
            <th class="px-6 py-3 text-start text-xs font-medium text-muted-foreground-1 uppercase">Name</th>
            <th class="px-6 py-3 text-start text-xs font-medium text-muted-foreground-1 uppercase">Staff Id</th>
            <th class="px-6 py-3 text-end text-xs font-medium text-muted-foreground-1 uppercase">Phone No</th>
            <th class="px-6 py-3 text-end text-xs font-medium text-muted-foreground-1 uppercase">Gender</th>
            <th class="px-6 py-3 text-end text-xs font-medium text-muted-foreground-1 uppercase">Date-Of-Birth</th>
            <th class="px-6 py-3 text-end text-xs font-medium text-muted-foreground-1 uppercase">Created At</th>
            <th class="px-6 py-3 text-end text-xs font-medium text-muted-foreground-1 uppercase">Action</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-table-line">
          <?php
          $sql = "SELECT * FROM staffs";

          //run query
          $query = mysqli_query($conn, $sql);

          while ($row = mysqli_fetch_assoc($query)) :

          ?>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-foreground"><?= $row['id'] ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-foreground"><?= $row['name'] ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-foreground"><?= $row['staff-id'] ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium text-foreground"><?= $row['phone-no'] ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium text-foreground"><?= $row['gender'] ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium text-foreground"><?= $row['date-of-birth'] ?></td>
              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium text-foreground"><?= $row['created_at'] ?></td>
              <!-- Button Group -->
              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium text-foreground">
                <div class="inline-flex rounded-lg shadow-2xs">
                  <a href=" ./staff-edit.php?row_id=<?= $row['id'] ?>" class="py-3 px-4 bg-gray-100 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg inline-flex items-center gap-x-2 text-sm font-medium focus:z-10 bg-layer border border-layer-line text-layer-foreground shadow-2xs hover:bg-layer-hover focus:outline-hidden focus:bg-layer-focus disabled:opacity-50 disabled:pointer-events-none"><svg class=" w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                  </a>
                  <a href=" ./staff-delete.php?row_id=<?= $row['id'] ?>" class="py-3 px-4 bg-gray-100 -ms-px first:rounded-s-lg first:ms-0 last:rounded-e-lg inline-flex items-center gap-x-2 text-sm font-medium focus:z-10 bg-layer border border-layer-line text-layer-foreground shadow-2xs hover:bg-layer-hover focus:outline-hidden focus:bg-layer-focus disabled:opacity-50 disabled:pointer-events-none" onclick="return confirm('Are U sure to delete?')"><svg class=" w-4 h-4 stroke-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                  </a>

                </div>
              </td>
              <!-- End Button Group -->


            </tr>

          <?php endwhile ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- End Table -->

</section>





<?php include("./template/footer.php"); ?>