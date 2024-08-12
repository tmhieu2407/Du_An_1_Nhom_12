
<div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Thống kê</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                <h3>Thống kê sản phẩm theo danh mục</h3>
                    <div class="row element-button">
                    </div>
                    <div class="row">
                        <div class="form-group col-md-8">
                        <div>
                            <div id="myChart"></div>
                        </div>
                        </div>
                        <div class="form-group col-md-4">
                            <table>
                                <tr>
                                    <th>Tên danh mục</th>
                                    <th>Số lượng sản phẩm</th>
                                    <br>
                                </tr>
                                <?php
                                    foreach ($listthongke as $tke):
                                    extract($tke);
                                ?>
                                    <tr>
                                        <td><?=$tendm?></td>
                                        <td><?=$count_sp?></td>
                                    </tr>
                                    
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div> 
                </div>  
            </div> 
        </div>
          
                 
    </main>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script>
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                const data = google.visualization.arrayToDataTable([
                    ['Danh mục', 'Số lượng sản phẩm'],
                    <?php
                    foreach ($listthongke as $item) {
                        echo '["' . $item['tendm'] . '", ' . $item['count_sp'] . '],';
                    }
                    ?>
                ]);

                const options = {
                    title: 'Biểu đồ',
                };

                const chart = new google.visualization.PieChart(document.getElementById('myChart'));
                chart.draw(data, options);
            }
        </script>
    

