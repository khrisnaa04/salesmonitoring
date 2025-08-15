# Development of Business Intelligence Sales Performance Monitoring Using the OLAP Method
This project showcases a Business Intelligence (BI) solution designed to monitor and analyze sales performance across five business branches. By integrating branch-level databases into a centralized data warehouse using **Pentaho**, and visualizing insights through **Power BI**, the system enables multidimensional analysis via the **OLAP** method—supporting strategic, data-driven decision-making.

## Features

- **Multi-Branch Integration**: Consolidates data from five separate MySQL databases into one centralized warehouse.
- **ETL with Pentaho**: Automates data extraction, transformation, and loading for consistent reporting.
- **Interactive BI Dashboard**: Embedded Power BI dashboard with OLAP capabilities for deep sales analysis.
- **Web Interface**: Simple PHP-based web view to host and display the embedded dashboard.

## Requirements

- [Pentaho Data Integration (Kettle)](https://sourceforge.net/projects/pentaho/)
- [XAMPP](https://www.apachefriends.org/index.html) (Apache + PHP + MySQL)
- [MySQL](https://www.mysql.com/)
- [Power BI Desktop](https://powerbi.microsoft.com/)

## Installation

1. Clone this repository.
2. Import SQL files from `/data/sql` into your MySQL server.
3. Configure Pentaho transformations and jobs from `/src/pentaho`.
4. Open Power BI files from `/src/powerbi` and connect to the warehouse.
5. Launch the PHP web interface from `/src/web` using XAMPP.
6. Embed the Power BI dashboard into the web view.

## File Structure
```sh
📂 sales-monitoring
│─ 📂 data
  │─ sql files
│─ 📂 scr
  │─ 📂 web
    │─ php files
  │─ 📂 power bi
    │─ bi files
  │─ 📂 pentaho
    │─ pentaho files
│─ LICENSE 
│─ README.md
```

## Notes

- The OLAP model enables slicing, dicing, and drill-down analysis for sales metrics.
- Power BI dashboards are optimized for branch-level and aggregate views.
- ETL jobs are scheduled for daily refresh to ensure up-to-date reporting.
- This project demonstrates practical BI implementation using open-source tools and commercial-grade visualization.

## License

This project is licensed under the [MIT License](LICENSE).
