            <?php

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['action'] === 'update') {
                if (isset($_POST['quantity'])) {
                    $id = $_POST['quantity'];
                    show_array($id);
                    foreach ($id as $key => $value) {
                        update_cart($value, $key);
                    }
                }

                redirect("?mod=cart&action=main");
            }


