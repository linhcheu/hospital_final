<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Receipt - Care Connect</title>
    <link rel="stylesheet" href="{{ asset('asset/css/reciept.css') }}">

</head>
<body>
    <div class="receipt-container">
        <!-- Header -->
        <div class="receipt-header">
            <div class="logo">
                <div class="logo-icon">+</div>
                <div class="company-name">Care Connect</div>
            </div>
            <div class="receipt-title">Appointment Receipt</div>
        </div>

        <!-- Body -->
        <div class="receipt-body">
            <!-- Receipt Info -->
            <div class="receipt-info">
                <div class="receipt-number">
                    <div class="info-label">Receipt No.</div>
                    <div class="info-value" id="receiptNumber">CC-2025-001247</div>
                </div>
                <div class="receipt-date">
                    <div class="info-label">Issue Date</div>
                    <div class="info-value" id="issueDate">June 14, 2025</div>
                </div>
            </div>

            <!-- Status -->
            <div class="status-section">
                <div class="status-icon">✓</div>
                <div class="status-text">Appointment Confirmed</div>
                <div class="status-subtext">Your appointment has been successfully booked</div>
            </div>

            <!-- Appointment Details -->
            <div class="appointment-details">
                <div class="section-title">Appointment Details</div>
                
                <div class="detail-row">
                    <div class="detail-label">Patient Name</div>
                    <div class="detail-value" id="patientName">John Doe</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Email</div>
                    <div class="detail-value" id="patientEmail">john.doe@email.com</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Phone Number</div>
                    <div class="detail-value" id="patientPhone">+855 12 345 678</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Hospital</div>
                    <div class="detail-value" id="hospitalName">General Hospital</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Appointment Date</div>
                    <div class="detail-value" id="appointmentDate">June 20, 2025</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Appointment Time</div>
                    <div class="detail-value" id="appointmentTime">10:00 AM</div>
                </div>
                
                <div class="detail-row">
                    <div class="detail-label">Reference ID</div>
                    <div class="detail-value" id="referenceId">APT-CC-789456</div>
                </div>
            </div>

            <!-- Symptoms -->
            <div class="symptoms-section">
                <div class="section-title">Reason for Visit</div>
                <div class="symptoms-text" id="symptomsText">
                    Regular checkup and consultation for general health assessment. Patient requested routine examination.
                </div>
            </div>

            <!-- Contact Info -->
            <div class="contact-info">
                <div class="contact-title">Hospital Contact Information</div>
                <div class="contact-details">
                    📍 Phnom Penh, Cambodia<br>
                    📞 +855 23 123 456<br>
                    ✉️ appointments@careconnect.com
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <button class="btn btn-primary" onclick="printReceipt()">🖨️ Print Receipt</button>
                <button class="btn btn-secondary" onclick="downloadReceipt()">📄 Save as PDF</button>
            </div>
        </div>

        <!-- Footer -->
        <div class="receipt-footer">
            Please bring this receipt with you on your appointment day.<br>
            For any changes or cancellations, please contact us at least 24 hours in advance.
        </div>
    </div>

    <script>
        // Generate receipt number and date
        function generateReceiptNumber() {
            const date = new Date();
            const year = date.getFullYear();
            const random = Math.floor(Math.random() * 999999).toString().padStart(6, '0');
            return `CC-${year}-${random}`;
        }

        function formatDate(date) {
            return date.toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        }

        // Initialize receipt with current data
        function initializeReceipt() {
            const now = new Date();
            document.getElementById('receiptNumber').textContent = generateReceiptNumber();
            document.getElementById('issueDate').textContent = formatDate(now);
            
            // Generate reference ID
            const refId = 'APT-CC-' + Math.floor(Math.random() * 999999).toString().padStart(6, '0');
            document.getElementById('referenceId').textContent = refId;
        }

        // Print receipt
        function printReceipt() {
            window.print();
        }

        // Save as PDF (placeholder - would need a PDF library in real implementation)
        function downloadReceipt() {
            alert('PDF download functionality would be implemented here. For now, you can use Print and save as PDF.');
        }

        // Populate receipt with appointment data if available
        function populateReceipt(appointmentData) {
            if (appointmentData) {
                if (appointmentData.firstName && appointmentData.lastName) {
                    document.getElementById('patientName').textContent = 
                        `${appointmentData.firstName} ${appointmentData.lastName}`;
                }
                if (appointmentData.email) {
                    document.getElementById('patientEmail').textContent = appointmentData.email;
                }
                if (appointmentData.phoneNumber) {
                    document.getElementById('patientPhone').textContent = appointmentData.phoneNumber;
                }
                if (appointmentData.hospital) {
                    const hospitalNames = {
                        'general': 'General Hospital',
                        'cardiac': 'Cardiac Care Center',
                        'pediatric': 'Children\'s Hospital',
                        'orthopedic': 'Orthopedic Clinic',
                        'emergency': 'Emergency Department'
                    };
                    document.getElementById('hospitalName').textContent = 
                        hospitalNames[appointmentData.hospital] || appointmentData.hospital;
                }
                if (appointmentData.appointmentDate) {
                    const date = new Date(appointmentData.appointmentDate);
                    document.getElementById('appointmentDate').textContent = formatDate(date);
                }
                if (appointmentData.symptoms) {
                    document.getElementById('symptomsText').textContent = appointmentData.symptoms;
                }
            }
        }

        // Initialize receipt on load
        document.addEventListener('DOMContentLoaded', function() {
            initializeReceipt();
            
            // Try to get appointment data from localStorage or URL params
            const urlParams = new URLSearchParams(window.location.search);
            const appointmentData = {};
            
            // Get data from URL parameters if available
            for (let [key, value] of urlParams) {
                appointmentData[key] = value;
            }
            
            if (Object.keys(appointmentData).length > 0) {
                populateReceipt(appointmentData);
            }
        });
    </script>
</body>
</html>