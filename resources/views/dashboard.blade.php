@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center mb-3">
            <h2 style="font-family: Cambria;">Dashboard</h2>
        </div>

        <div style="background-color: white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 8px; padding: 20px; margin: 20px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 20px; flex-wrap: wrap;">
                <div style="background: #f4f4f4; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 23%; text-align: center; margin-bottom: 20px;">
                    <p style="margin: 0; color: #666;"><i class="fa-solid fa-users"></i> Jumlah Anggota</p>
                    <h3 style="margin: 10px 0; color: #333;">10</h3>
                    <p style="margin: 0; color: #666;">10% Since last month</p>
                </div>
                <div style="background: #f4f4f4; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 23%; text-align: center; margin-bottom: 20px;">
                    <p style="margin: 0; color: #666;"><i class="fas fa-user-plus"></i> Anggota Baru</p>
                    <h3 style="margin: 10px 0; color: #333;">10</h3>
                    <p style="margin: 0; color: #666;">10% Since last week</p>
                </div>
                <div style="background: #f4f4f4; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 23%; text-align: center; margin-bottom: 20px;">
                    <p style="margin: 0; color: #666;"><i class="fas fa-book"></i> Buku Dipinjam</p>
                    <h3 style="margin: 10px 0; color: #333;">10</h3>
                    <p style="margin: 0; color: #666;">10% Since yesterday</p>
                </div>
                <div style="background: #f4f4f4; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 23%; text-align: center; margin-bottom: 20px;">
                    <p style="margin: 0; color: #666;"><i class="fas fa-chart-line"></i> Kinerja Perpustakaan</p>
                    <h3 style="margin: 10px 0; color: #333;">33.4%</h3> <!-- Kinerja berdasarkan rata-rata persentase -->
                    <p style="margin: 0; color: #666;">Based on data</p>
                </div>
            </div>
            <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">
                <canvas id="salesChart" style="width: 48% !important; height: 400px !important; margin-bottom: 20px;"></canvas>
                <canvas id="ordersChart" style="width: 48% !important; height: 400px !important; margin-bottom: 20px;"></canvas>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        const ctxSales = document.getElementById('salesChart').getContext('2d');
        const ctxOrders = document.getElementById('ordersChart').getContext('2d');

        const salesChart = new Chart(ctxSales, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Nilai Pinjaman Buku',
                    data: [3000, 2000, 4000, 5000, 4000, 6000, 7000],
                    borderColor: 'blue',
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Value'
                        }
                    }
                }
            }
        });

        const ordersChart = new Chart(ctxOrders, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Total Peminjaman',
                    data: [10, 20, 30, 40, 50, 60, 70],
                    backgroundColor: 'orange'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Orders'
                        }
                    }
                }
            }
        });
    </script>
@endsection
