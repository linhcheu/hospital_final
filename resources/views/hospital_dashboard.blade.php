<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('asset/css/after.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/h_dash.css') }}">
    <title>Hospital Information Form</title>
    <style>

        .form-container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }

        .form-title {
            text-align: center;
            font-size: 2.5rem;
            color: #667eea;
            margin-bottom: 50px;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
            align-items: start;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 1rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            text-transform: capitalize;
        }

        .form-input {
            background: #f8f9ff;
            border: 2px solid #e1e5f7;
            border-radius: 12px;
            padding: 20px;
            font-size: 1rem;
            color: #333;
            transition: all 0.3s ease;
            min-height: 200px;
            resize: vertical;
        }

        .form-input:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-input::placeholder {
            color: #a0a8c1;
            font-style: italic;
        }

        .image-upload {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .image-upload-area {
            background: #f8f9ff;
            border: 2px dashed #b8c5f7;
            border-radius: 12px;
            padding: 30px 20px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 200px;
        }

        .image-upload-area:hover {
            border-color: #667eea;
            background: #f0f2ff;
        }

        .image-upload-area.dragover {
            border-color: #667eea;
            background: #e8ebff;
        }

        .upload-icon {
            width: 60px;
            height: 60px;
            background: #667eea;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .upload-icon::before {
            content: '📷';
            font-size: 1.5rem;
            color: white;
        }

        .image-upload-area:hover .upload-icon {
            transform: scale(1.1);
        }

        .upload-text {
            color: #667eea;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .upload-subtext {
            color: #a0a8c1;
            font-size: 0.9rem;
        }

        .hidden-input {
            display: none;
        }

        .preview-image {
            max-width: 100%;
            max-height: 200px;
            border-radius: 8px;
            margin-top: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .confirmation-section {
            text-align: center;
            margin-top: 30px;
        }

        .confirm-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 18px 50px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        .confirm-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.4);
        }

        .confirm-btn:active {
            transform: translateY(-1px);
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 30px 20px;
            }
            
            .form-title {
                font-size: 2rem;
                margin-bottom: 30px;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .image-upload {
                grid-row: auto;
                order: -1;
            }
            
            .image-upload-area {
                min-height: 200px;
                padding: 30px 15px;
            }
            
            .upload-icon {
                width: 60px;
                height: 60px;
                margin-bottom: 15px;
            }
            
            .upload-icon::before {
                font-size: 1.5rem;
            }
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            align-items: start;
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
  @include ('master.header')
    <div class="form-container">
        <h1 class="form-title">Fill the Hospital Information</h1>
        
        <form id="hospitalForm">
            <div class="form-grid">
                <!-- Hospital Information -->
                <div class="form-group">
                    <label for="hospitalInfo">Hospital Information</label>
                    <textarea 
                        id="hospitalInfo" 
                        name="hospitalInfo" 
                        class="form-input" 
                        placeholder="Enter detailed hospital information, services, facilities, and other relevant details..."
                        required
                    ></textarea>
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea 
                        id="address" 
                        name="address" 
                        class="form-input" 
                        placeholder="Enter complete hospital address including street, city, state, and postal code..."
                        required
                    ></textarea>
                </div>

                <!-- Image Upload -->
                <div class="form-group image-upload">
                    <label for="hospitalImage">Hospital Image</label>
                    <div class="image-upload-area" onclick="document.getElementById('hospitalImage').click()">
                        <div class="upload-icon"></div>
                        <div class="upload-text">Upload Hospital Image</div>
                        <div class="upload-subtext">Click to browse or drag & drop</div>
                        <div class="upload-subtext">PNG, JPG up to 10MB</div>
                    </div>
                    <input 
                        type="file" 
                        id="hospitalImage" 
                        name="hospitalImage" 
                        class="hidden-input" 
                        accept="image/*"
                    >
                    <div id="imagePreview"></div>
                </div>
            </div>

            <div class="form-row">
                <!-- Contact -->
                <div class="form-group">
                    <label for="contact">Contact</label>
                    <textarea 
                        id="contact" 
                        name="contact" 
                        class="form-input" 
                        placeholder="Enter contact information including phone numbers, email addresses, emergency contacts..."
                        required
                    ></textarea>
                </div>

                <!-- Specialties -->
                <div class="form-group">
                    <label for="specialties">Specialties</label>
                    <textarea 
                        id="specialties" 
                        name="specialties" 
                        class="form-input" 
                        placeholder="List hospital specialties, departments, medical services, and areas of expertise..."
                        required
                    ></textarea>
                </div>
            </div>

            <div class="confirmation-section">
                <button type="submit" class="confirm-btn">Confirmation</button>
            </div>
        </form>
    </div>

    <script>
        // Image upload functionality
        const imageInput = document.getElementById('hospitalImage');
        const imageUploadArea = document.querySelector('.image-upload-area');
        const imagePreview = document.getElementById('imagePreview');

        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.innerHTML = `<img src="${e.target.result}" alt="Hospital Preview" class="preview-image">`;
                };
                reader.readAsDataURL(file);
            }
        });

        // Drag and drop functionality
        imageUploadArea.addEventListener('dragover', function(e) {
            e.preventDefault();
            this.classList.add('dragover');
        });

        imageUploadArea.addEventListener('dragleave', function(e) {
            e.preventDefault();
            this.classList.remove('dragover');
        });

        imageUploadArea.addEventListener('drop', function(e) {
            e.preventDefault();
            this.classList.remove('dragover');
            
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                const file = files[0];
                if (file.type.startsWith('image/')) {
                    imageInput.files = files;
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        imagePreview.innerHTML = `<img src="${e.target.result}" alt="Hospital Preview" class="preview-image">`;
                    };
                    reader.readAsDataURL(file);
                }
            }
        });

        // Form submission
        document.getElementById('hospitalForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const hospitalData = {
                hospitalInfo: formData.get('hospitalInfo'),
                address: formData.get('address'),
                contact: formData.get('contact'),
                specialties: formData.get('specialties'),
                image: formData.get('hospitalImage')
            };
            
            // Button feedback
            const submitBtn = document.querySelector('.confirm-btn');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Processing...';
            submitBtn.style.opacity = '0.7';
            
            // Simulate form submission
            setTimeout(() => {
                submitBtn.textContent = 'Confirmed!';
                submitBtn.style.background = 'linear-gradient(135deg, #4CAF50 0%, #45a049 100%)';
                
                setTimeout(() => {
                    submitBtn.textContent = originalText;
                    submitBtn.style.opacity = '1';
                    submitBtn.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
                }, 2000);
            }, 1500);
            
            console.log('Hospital Information Submitted:', hospitalData);
        });

        // Auto-resize textareas
        document.querySelectorAll('.form-input').forEach(textarea => {
            textarea.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = Math.max(120, this.scrollHeight) + 'px';
            });
        });
    </script>
    @include ('master.footer')
</body>
</html>